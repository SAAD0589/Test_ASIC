<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 py-5">


        <form action="pdf.php" method="post" target="_blank">
        <div class="row py-3 justify-content-end">
                <div class="col-2">
                    <button type="submit" name="pdf_creater" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1" />
                            <path
                                d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1" />
                        </svg>Imprimer</button>
                </div>

            </div>
        </form>
        <form method="post">
            
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Période du</label>
                        <input type="text" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="nom" class="form-control" placeholder="Enter nom">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Prenom</label>
                        <input type="text" name="prenom" class="form-control" placeholder="Enter Prenom">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>adresse</label>
                        <input type="text" name="adresse" class="form-control" placeholder="Enter adresse">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Ville</label>
                        <input type="text" name="ville" class="form-control" placeholder="Enter Ville">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label> Date d'entrée</label>
                        <input type="date" name="date_entree" class="form-control" placeholder="Enter Date d'entrée">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>N° de Sécurité Sociale</label>
                        <input type="text" name="numero_securite_sociale" class="form-control"
                            placeholder="Enter N° de Sécurité Sociale">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Convention collective  </label>
                        <input type="text" name="convention_collective" class="form-control"
                            placeholder="Convention collective ">
                    </div>
                </div>

                <br><br><br><br><br><br><br>
                <div class="col-6">
                    <div class="form-group">
                        <label> U.R.S.S.A.F.</label>
                        <input type="text" name="ursaff" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label> Emploi</label>
                        <input type="text" name="nom_Emploi" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Valeur SMIC </label>
                        <input type="text" name="valeur_smic" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label> R.J.S.R </label>
                        <input type="text" name="rjsr" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label> Sujétion particulière</label>
                        <input type="text" name="sujetion_particuliere" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>I.R.F.E.C</label>
                        <input type="text" name="irfec" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Date de valeur Minimum </label>
                        <input type="text" name="valeurs_smic_mg" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Commentaire </label>
                        <input type="text" name="commentaire" class="form-control" placeholder="Enter text">
                    </div>
                </div>

                <br><br><br><br><br><br>
                <div class="col-6">
                    <div class="form-group">
                        <label>Libellé de la rubrique </label>
                        <input type="text" name="libelle" class="form-control"
                            placeholder="Enter Libellé de la rubrique">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label> Nombre de jour </label>
                        <input type="text" name="nombre_de_jours" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Base (MG) </label>
                        <input type="text" name="base_montant" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Part salariale Taux % </label>
                        <input type="text" name="Part_salariale_taux" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Part salariale Gain </label>
                        <input type="text" name="Part_salariale_gain" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Part salariale Retenue </label>
                        <input type="text" name="Part_salariale_retenue" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Part patronale Taux % </label>
                        <input type="text" name="Part_patronale_taux" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Part patronale Retenue</label>
                        <input type="text" name="Part_patronale_retenue" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label> NET A PAYER </label>
                        <input type="text" name="net_payer" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br><br>
                <div class="col-6">
                    <div class="form-group">
                        <label> Cumuls </label>
                        <input type="text" name="Cumul" class="form-control" placeholder="Enter Cumuls">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label> Salaire brut </label>
                        <input type="text" name="salaire_brut_cumul" class="form-control"
                            placeholder="Enter Salaire brut">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label> Net imposable </label>
                        <input type="text" name="net_imposable_cumul" class="form-control"
                            placeholder="Enter  Net imposable">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label> Charges salariales </label>
                        <input type="text" name="charge_salariales" class="form-control"
                            placeholder="Enter Charges salariales">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label> Charges patronales </label>
                        <input type="text" name="charge_patronales" class="form-control"
                            placeholder="Enter Charges patronales">
                    </div>
                </div>

            </div>

            <div class="mt-5">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>

            </div>

        </form>
    </div>

    <?php
if (isset($_POST['submit'])) {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'asic'); // Update with your DB username/password
    
    // Check for connection error
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Insert into employe table
    $stmt_employe = $conn->prepare("INSERT INTO employe (nom, prenom, adresse, ville, date_entree, numero_securite_sociale, convention_collective) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt_employe->bind_param("sssssss", $nom, $prenom, $adresse, $ville, $date_entree, $numero_securite_sociale, $convention_collective);

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $date_entree = $_POST['date_entree'];
    $numero_securite_sociale = $_POST['numero_securite_sociale'];
    $convention_collective = $_POST['convention_collective'];

    if ($stmt_employe->execute()) {
        // Get the last inserted employee ID
        $employe_id = $stmt_employe->insert_id;

        // Insert into contrat table
        $stmt_contrat = $conn->prepare("INSERT INTO contrat (employe_id, nom_Emploi, ursaff, valeur_smic, rjsr, sujetion_particuliere, irfec, valeurs_smic_mg, commentaire) 
                                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt_contrat->bind_param("issiddsss", $employe_id, $nom_Emploi, $ursaff, $valeur_smic, $rjsr, $sujetion_particuliere, $irfec, $valeurs_smic_mg, $commentaire);

        $nom_Emploi = $_POST['nom_Emploi'];
        $ursaff = $_POST['ursaff'];
        $valeur_smic = $_POST['valeur_smic'];
        $rjsr = $_POST['rjsr'];
        $sujetion_particuliere = $_POST['sujetion_particuliere'];
        $irfec = $_POST['irfec'];
        $valeurs_smic_mg = $_POST['valeurs_smic_mg'];
        $commentaire = $_POST['commentaire'];

        if ($stmt_contrat->execute()) {
            echo "Contract data added successfully";
        } else {
            echo "Error adding contract data: " . $stmt_contrat->error;
        }

        // Insert into revenusretenues table
        $stmt_revenus = $conn->prepare("INSERT INTO revenusretenues (employe_id, libelle, nombre_de_jours, base_montant, Part_salariale_taux, Part_salariale_gain, Part_salariale_retenue, Part_patronale_taux, Part_patronale_retenue, net_payer) 
                                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt_revenus->bind_param("isdddddddd", $employe_id, $libelle, $nombre_de_jours, $base_montant, $Part_salariale_taux, $Part_salariale_gain, $Part_salariale_retenue, $Part_patronale_taux, $Part_patronale_retenue, $net_payer);

        // Assign values for revenusretenues
        $libelle = $_POST['libelle'];
        $nombre_de_jours = $_POST['nombre_de_jours'];
        $base_montant = $_POST['base_montant'];
        $Part_salariale_taux = $_POST['Part_salariale_taux'];
        $Part_salariale_gain = $_POST['Part_salariale_gain'];
        $Part_salariale_retenue = $_POST['Part_salariale_retenue'];
        $Part_patronale_taux = $_POST['Part_patronale_taux'];
        $Part_patronale_retenue = $_POST['Part_patronale_retenue'];
        $net_payer = $_POST['net_payer'];

        if ($stmt_revenus->execute()) {
            echo "Revenus/Retenues data added successfully";
        } else {
            echo "Error adding revenus/retenues data: " . $stmt_revenus->error;
        }

        // Insert into cumul table
        $stmt_cumul = $conn->prepare("INSERT INTO cumul (employe_id, Cumul, salaire_brut_cumul, net_imposable_cumul, charge_salariales, charge_patronales) 
                                      VALUES (?, ?, ?, ?, ?, ?)");
        $stmt_cumul->bind_param("isdddd", $employe_id, $Cumul, $salaire_brut_cumul, $net_imposable_cumul, $charge_salariales, $charge_patronales);

        // Assign values for cumul
        $Cumul = $_POST['Cumul'];
        $salaire_brut_cumul = $_POST['salaire_brut_cumul'];
        $net_imposable_cumul = $_POST['net_imposable_cumul'];
        $charge_salariales = $_POST['charge_salariales'];
        $charge_patronales = $_POST['charge_patronales'];

        if ($stmt_cumul->execute()) {
            echo "Cumul data added successfully";
        } else {
            echo "Error adding cumul data: " . $stmt_cumul->error;
        }
    } else {
        echo "Error adding employee: " . $stmt_employe->error;
    }

    // Close statements and connection
    $stmt_employe->close();
    $stmt_contrat->close();
    $stmt_revenus->close();
    $stmt_cumul->close();
    $conn->close();
}
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>