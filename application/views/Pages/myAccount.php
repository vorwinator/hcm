<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/autofill/2.3.7/css/autoFill.dataTables.min.css">

    </head>

    <body>
        
        <div class="container-fluid">
            <div class="row banerAuthenticated">
                <div class="col-2 align-self-center banerImageDiv">
                    <img class="banerImage" src="./media/artneoLogo.svg">
                </div>
                <div class="col-6">

                </div>
                <div class="col-2 text-center align-self-center">
                    Zalogowano jako<br/><span class="text-success">Piotr</span>
                </div>

                <div class="col-2 align-self-center">
                    Wyloguj
                </div>
            </div>

            <div class="row navigationBar justify-content-center">
                <div class="col-3 menuSection align-self-center alignTextCenter">
                    <button class="btn dropdown-toggle menuButton" type="button" id="clientMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Klienci
                    </button>
                    <div class="dropdown-menu" aria-labelledby="clientMenuButton">
                        <a class="dropdown-item" href="#">Lista klientów</a>
                        <a class="dropdown-item" href="#">Moi klienci</a>
                        <a class="dropdown-item" href="#">Dodaj klienta</a>
                    </div>
                </div>

                <div class="col-3 menuSection align-self-center alignTextCenter">
                    <button class="btn dropdown-toggle menuButton" type="button" id="servicesMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usługi
                    </button>
                    <div class="dropdown-menu" aria-labelledby="servicesMenuButton">
                        <a class="dropdown-item" href="#">Lista usług</a>
                        <a class="dropdown-item" href="#">Lista domen</a>
                        <a class="dropdown-item" href="#">Lista hostingów</a>
                        <a class="dropdown-item" href="#">Lista certyfikatów</a>
                        <a class="dropdown-item" href="#">Lista zakupinych usług</a>
                    </div>
                </div>

                <div class="col-3 menuSection align-self-center alignTextCenter">
                    <button class="btn dropdown-toggle menuButton" type="button" id="accountMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Konto
                    </button>
                    <div class="dropdown-menu" aria-labelledby="accountMenuButton">
                        <a class="dropdown-item" href="#">Dodaj nowe konto</a>
                        <a class="dropdown-item" href="#">Lista kont</a>
                        <a class="dropdown-item" href="#">Moje konto</a>
                        <a class="dropdown-item" href="#">Edytuj konto</a>
                    </div>
                </div>
                <div class="col-2"></div>
                
            </div>

            <div class="row currLocationBaner">
                <div class="col-10 locationBanerItem align-self-center">
                    Konto > Dodaj nowe konto
                </div>
            </div>

            <div class="row content justify-content-center">
                <div class="col">
                    <div class="row myAccountTableDiv">
                        <div class="col-6">
                            Informacje
                            <table class="myAccountTable">
                                <tr>
                                    <th>Id</th>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>piotr@artneo.pl</td>
                                </tr>
                                <tr>
                                    <th>Imie</th>
                                    <td>Piotr</td>
                                </tr>
                                <tr>
                                    <th>Nazwisko</th>
                                    <td>Mogiła</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-6">
                            Edycja danych
                            <table class="myAccountTable">
                                <tr>
                                    <th>Email</th>
                                    <td><input type="text" class="tdInput" placeholder="Email"></td>
                                </tr>
                                <tr>
                                    <th>Imie</th>
                                    <td><input type="text" class="tdInput" placeholder="Imie"></td>
                                </tr>
                                <tr>
                                    <th>Nazwisko</th>
                                    <td><input type="text" class="tdInput" placeholder="Nazwisko"></td>
                                </tr>
                            </table>
                            <button>Zatwierdź zmiany</button>

                        </div>
                    </div>
                    <div class="row myAccountTableDiv">
                        <div class="col-6">
                            Zmiana hasła
                            <table class="myAccountTable">
                                <tr>
                                    <th>Stare hasło</th>
                                    <td><input type="password" class="tdInput" placeholder="Stare hasło"></td>
                                </tr>
                                <tr>
                                    <th>Nowe hasło</th>
                                    <td><input type="password" class="tdInput" placeholder="Nowe hasło"></td>
                                </tr>
                                <tr>
                                    <th>Powtórz nowe hasło</th>
                                    <td><input type="password" class="tdInput" placeholder="Powtórz nowe hasło"></td>
                                </tr>
                            </table>
                            <button>Zatwierdź zmiany</button>
                        </div>
                        <div class="col-6">

                        </div>
                    </div>
                </div>

            </div>

            <div class="row footer">
                <div class="col align-self-center">
                    &#169; Copyright Artneo 2002-2021 Wszlkie prawa zastrzeżone 
                </div>
            </div>
        </div>

    
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/autofill/2.3.7/js/dataTables.autoFill.min.js"></script>
        <script type="text/javascript" src="dataTablesScript.js"></script>
    </body>
</html>