<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../../css/estilo_formVeiculo.css">
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <title>Cadastro de Veículos
    </title>

    <script>
    function validate(val) {
        v1 = document.getElementById("fname");
        v2 = document.getElementById("lname");
        v3 = document.getElementById("email");
        v4 = document.getElementById("mob");
        v5 = document.getElementById("job");
        v6 = document.getElementById("ans");

        flag1 = true;
        flag2 = true;
        flag3 = true;
        flag4 = true;
        flag5 = true;
        flag6 = true;

        if (val >= 1 || val == 0) {
            if (v1.value == "") {
                v1.style.borderColor = "red";
                flag1 = false;
            } else {
                v1.style.borderColor = "green";
                flag1 = true;
            }
        }

        if (val >= 2 || val == 0) {
            if (v2.value == "") {
                v2.style.borderColor = "red";
                flag2 = false;
            } else {
                v2.style.borderColor = "green";
                flag2 = true;
            }
        }
        if (val >= 3 || val == 0) {
            if (v3.value == "") {
                v3.style.borderColor = "red";
                flag3 = false;
            } else {
                v3.style.borderColor = "green";
                flag3 = true;
            }
        }
        if (val >= 4 || val == 0) {
            if (v4.value == "") {
                v4.style.borderColor = "red";
                flag4 = false;
            } else {
                v4.style.borderColor = "green";
                flag4 = true;
            }
        }
        if (val >= 5 || val == 0) {
            if (v5.value == "") {
                v5.style.borderColor = "red";
                flag5 = false;
            } else {
                v5.style.borderColor = "green";
                flag5 = true;
            }
        }
        if (val >= 6 || val == 0) {
            if (v6.value == "") {
                v6.style.borderColor = "red";
                flag6 = false;
            } else {
                v6.style.borderColor = "green";
                flag6 = true;
            }
        }

        flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

        return flag;
    }
    </script>

</head>

<body>

    <form action="/veiculo/save" method="post">


        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">

                <div class="card">
                    <h5 class="text-center mb-4">Cadastre seu veiculo:</h5>
                    <form class="form-card" onsubmit="event.preventDefault()">
                        <div class="row justify-content-between text-left">

                            <input type="hidden" value="<?= $model->id ?>" name="id">

                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="Marca">Marca: <class="form-control-label px-3"<span class="text-danger">
                                        </span></label>
                                <select name="Marca">
                                    <?php foreach($model->Lista_Marca as $Marca):?>
                                    <option value="<?= $Marca['id']?>"
                                        <?= ($Marca['id'] == $model->id_Marca) ? 'selected' : " " ?>>
                                        <?= $Marca['nome'] ?>
                                    </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">

                                <label class="form-control-label px-3">Last name<span class="text-danger">
                                        *</span></label> <input type="text" id="lname" name="lname"
                                    placeholder="Enter your last name" onblur="validate(2)">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">Business email<span class="text-danger">
                                        *</span></label> <input type="text" id="email" name="email" placeholder=""
                                    onblur="validate(3)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">Phone number<span class="text-danger">
                                        *</span></label> <input type="text" id="mob" name="mob" placeholder=""
                                    onblur="validate(4)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">Job title<span class="text-danger">
                                        *</span></label> <input type="text" id="job" name="job" placeholder=""
                                    onblur="validate(5)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label
                                    class="form-control-label px-3">What would you be using Flinks for?<span
                                        class="text-danger"> *</span></label> <input type="text" id="ans" name="ans"
                                    placeholder="" onblur="validate(6)"> </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit"
                                    class="btn-block btn-primary">Request a demo</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

</html>