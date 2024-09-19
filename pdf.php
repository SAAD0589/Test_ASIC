<?php
//============================================================+
// File name   : example_011.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 011 for TCPDF class
//               Colored Table (very simple table)
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Colored Table
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
// Include the main TCPDF library (search for installation path).
require_once('TCPDF-main/tcpdf.php');

// extend TCPF with custom functions
class MYPDF extends TCPDF
{

    // Load table data from file
    public function LoadData()
    {
        include 'connect.php';
        $select = "SELECT *
FROM employe e
INNER JOIN contrat c ON e.employe_id = c.employe_id
INNER JOIN revenusretenues r ON e.employe_id = r.employe_id
INNER JOIN cumul cu ON e.employe_id = cu.employe_id;
";
        $query = mysqli_query($conn, $select);
        return $query;
    }

    // Function to create the complex table layout
    public function CustomPayrollTable($data)
    {
        // Set font for the table
        $this->SetFont('helvetica', '', 10);

        // Start HTML string
        $html = '<table border="1" cellpadding="4">';

        // Add title row with colspan
        $html .= '
            <tr>
                <th colspan="2" style="background-color: #c0c0c0;"><b>BULLETIN DE PAIE</b></th>
                <th colspan="7"><b>Période du : 1er janvier 2013</b></th>
            </tr>';



        // Iterate through data to populate dynamic rows
        foreach ($data as $row) {
            $html .= '
            <tr>
                <td colspan="4" rowspan="3" valign="top">
                    <b>Nom :'. htmlspecialchars($row['nom']) . '
                    <br>Prénom : ' . htmlspecialchars($row['prenom']) .' 
                    <br>adresse : ' . htmlspecialchars($row['adresse']) .'
                    <br>Ville : ' . htmlspecialchars($row['ville']) .' </b>
                </td>
                <td colspan="5" ><b>Date d\'entrée : (*)  contrat</b></td>
            </tr>
            <tr>
                <td colspan="5" valign="top">N° de Sécurité Sociale <b>de l\'accueillant familial</b></td>
            </tr>
            <tr>
                <td colspan="5" valign="top">
                    <p>Convention collective : Accueil familial</p>
                    <p><b>S\'assurer de la valeur</b></p>
                </td>
            </tr>
            <tr>
                <td colspan="4" valign="top">U.R.S.S.A.F.</td>
                <td colspan="5" valign="top" style="text-align: center;background-color: #c0c0c0;">
                    <p><b>du SMIC et du MG</b></p>
                    <p><b>de la valeur du SMIC et du MG</b></p>
                </td>
            </tr>
            <tr >
                <td colspan="4" valign="top">Emploi :'. htmlspecialchars($row['nom_Emploi']) .'</td>
<td colspan="5" rowspan="6" style="background-color: #c0c0c0; text-align: center; padding: 0; height: 200px; vertical-align: middle;">
    <div style="display: inline-block; vertical-align: middle; line-height: normal; height: 100%; padding: 0; width: 100%; text-align: center;">
        <b>MADAME (ACCUEILLANT FAMILIAL) ADRESSE DE L ACCUEILLANT FAMILIAL Code Postal Commune MAQUETTE</b>
    </div>
</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; background-color: #c0c0c0;">Valeur SMIC 01/01/2013</td>
                <td colspan="1" valign="bottom"><b>' . htmlspecialchars($row['valeur_smic']) . '</b></td>
                <td colspan="1" valign="bottom">SMIC</td>
                <td colspan="1" valign="bottom"><b>SMIC</b></td>
            </tr>
            <tr>
                <td colspan="2">(*) R.J.S.R </td>
                <td colspan="1" valign="bottom"><b>' . htmlspecialchars($row['rjsr']) . '</b></td>
                <td colspan="1" valign="bottom">SMIC</td>
                <td colspan="1" valign="bottom"><b>' . htmlspecialchars($row['nom']) . '</b></td>
            </tr>
            <tr>
                <td colspan="2">(*) Sujétion particulière</td>
                <td colspan="1" valign="bottom"><b>' . htmlspecialchars($row['sujetion_particuliere']) . '</b></td>
                <td colspan="1" valign="bottom">M.G</td>
                <td colspan="1"></td>
            </tr>
             <tr>
                <td colspan="2">(*) I.R.F.E.C</td>
                <td colspan="1" valign="bottom"><b>' . htmlspecialchars($row['irfec']) . '</b></td>
                <td colspan="1" valign="bottom">M.G</td>
                <td colspan="1"></td>
            </tr>
             <tr>
                <td colspan="2" style="text-align: center; background-color: #c0c0c0;">(*)  Date de valeur Minimum Garanti  01/07/2012 3,49 M.G 01/07/2012</td>
                <td colspan="1" valign="bottom"><b>' . htmlspecialchars($row['valeurs_smic_mg']) . '</b></td>
                <td colspan="1" valign="bottom">M.G</td>
                <td colspan="1"></td>
            </tr>
             <tr>
                <td colspan="9" valign="top">Commentaire : '. htmlspecialchars($row['commentaire']) .'</td>
            </tr>
        ';
        }
        $html .= '
           <tr>
            <td colspan="2" style="text-align: center; background-color: #c0c0c0;" rowspan="2"><b>Libellé de la rubrique</b></td>
            <td colspan="1" style="text-align: center; background-color: #c0c0c0;" rowspan="2"><b>Nbre de jour</b></td>
            <td colspan="1" style="text-align: center; background-color: #c0c0c0;" rowspan="2"><b>Base (MG)</b></td>
            <td colspan="3" style="text-align: center; background-color: #c0c0c0;"><b>Part salariale</b></td>
            <td colspan="2" style="text-align: center; background-color: #c0c0c0;"><b>Part patronale</b></td>
        </tr>
        <tr>
            <td colspan="1" style="text-align: center;">Taux %</td>
            <td colspan="1" style="text-align: center;">Gain</td>
            <td colspan="1" style="text-align: center;">Retenue</td>
            <td colspan="1" style="text-align: center;">Taux %</td>
            <td colspan="1" style="text-align: center;">Retenue</td>
        </tr>';
          foreach ($data as $row) {
            $html .= '
        <tr>
            <td colspan="2" rowspan="4" valign="top">
                <p>'. htmlspecialchars($row['libelle']) . '</p>
            </td>
            <td colspan="1" rowspan="4" valign="top">
                <p>'. htmlspecialchars($row['nombre_de_jours']) . '</p>
            </td>
            <td colspan="1" rowspan="4" valign="top">
                <p>'. htmlspecialchars($row['base_montant']) . '</p>
            </td>
            <td colspan="1" rowspan="4" valign="top">
                <p>'. htmlspecialchars($row['Part_salariale_taux']) . '</p>
            </td>
            <td colspan="1" valign="top">'. htmlspecialchars($row['Part_salariale_gain']) . '</td>
            <td colspan="1" rowspan="2" valign="top">
                <p>'. htmlspecialchars($row['Part_salariale_retenue']) . '</p>
            </td>
            <td colspan="1" rowspan="2" valign="top">
                <p>'. htmlspecialchars($row['Part_patronale_taux']) . '</p>
            </td>
            <td colspan="1" rowspan="2" valign="top">
                <p>'. htmlspecialchars($row['Part_patronale_retenue']) . '</p>
            </td>
        </tr>
        <tr>
            <td colspan="1" rowspan="3" valign="top">
                <p>'. htmlspecialchars($row['Part_patronale_retenue']) .'</p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center; background-color: #c0c0c0;"><b>NET A PAYER</b></td>
        </tr>
        <tr>
            <td colspan="3"><b>'. htmlspecialchars($row['net_payer']) . '€</b></td>
        </tr>';
          }
        $html .= '
               <tr>
            <td colspan="1" rowspan="2" style="text-align: center; background-color: #c0c0c0;">
                <b>Cumuls</b></td><td colspan="1" rowspan="2" style="text-align: center; background-color: #c0c0c0;"><b>Salaire brut</b>
            </td>
            <td colspan="2" rowspan="2" style="text-align: center; background-color: #c0c0c0;">
                <b>Net imposable</b>
            </td>
            <td colspan="5" style="text-align: center; background-color: #c0c0c0;">
                <b>Charges</b>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <b>salariales</b>
            </td>
            <td colspan="3" style="text-align: center;">
                <b>patronales</b>
            </td>
        </tr>';
             foreach ($data as $row) {
            $html .= '
        <tr>
            <td colspan="1">'. htmlspecialchars(string: $row['Cumul']) .' </td>
            <td colspan="1">'. htmlspecialchars(string: $row['salaire_brut_cumul']) .'</td>
            <td colspan="2">'. htmlspecialchars(string: $row['net_imposable_cumul']) .'</td>
            <td colspan="2">'. htmlspecialchars(string: $row['charge_salariales']) .'</td>
            <td colspan="3">'. htmlspecialchars(string: $row['charge_patronales']) .'</td>
        </tr>';
        }
        // Add comments row
        $html .= '
           
        </table>';

        // Write HTML content
        $this->writeHTML($html, true, false, true, false, '');
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Bulletin de Paie');
$pdf->SetSubject('Payroll PDF');
$pdf->SetKeywords('TCPDF, PDF, Payroll, example');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'Bulletin de Paie', 'Période du: 1er janvier 2013');

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

// load data from the database
$data = $pdf->LoadData();

// print the custom payroll table
$pdf->CustomPayrollTable($data);

// output PDF
$pdf->Output('payroll.pdf', 'I');

?>