<!DOCTYPE html>
<html>
<head>
    <title>PrimeTest</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(document).on("click", "#add_client", function () {
                var form = $("#formAdd");
                form.css("display", "block");
                $("#add_client").replaceWith(form);
            });
            $(document).on("click", "#name_search", function () {
                var form = $("#formName");
                form.css("display", "block");
                $("#name_search").replaceWith(form);
            });
            $(document).on("click", "#surname_search", function () {
                var form = $("#formSurname");
                form.css("display", "block");
                $("#surname_search").replaceWith(form);
            });
            $(document).on("click", "#phone_search", function () {
                var form = $("#formPhone");
                form.css("display", "block");
                $("#phone_search").replaceWith(form);
            });
            $(document).on("click", "#edit", function () {
                var form = $("#formEdit");
                form.css("display", "block");
            });
        });
        function setId(id) {
            $('#hidden-id').val(id);
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <br>
            <a class="col-md-3" id="add_client" href="#" onclick="return false">Добавить клиента</a>

            <form id="formAdd" name="form" style="display: none" action="addClient" method="post">
                <input placeholder="Name" name="name">
                <input placeholder="Surame" name="surname">
                <input placeholder="Phone" name="phone">
                <input type="submit" value="Добавить клиента" id="done" name="send">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>

            <a class="col-md-3" id="name_search" href="#" onclick="return false">Поиск по имени</a>
            <form id="formName" name="form" style="display: none" action="searchName" method="post">
                <input placeholder="Name" name="name">
                <input type="submit" value="Поиск" id="done" name="send">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>

            <a class="col-md-3" id="surname_search" href="#" onclick="return false">Поиск по фамилии</a>
            <form id="formSurname" name="form" style="display: none" action="searchSurame" method="post">
                <input placeholder="Surame" name="surname">
                <input type="submit" value="Поиск" id="done" name="send">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>

            <a class="col-md-3" id="phone_search" href="#" onclick="return false">Поиск по номеру</a>
            <form id="formPhone" name="form" style="display: none" action="searchPhone" method="post">
                <input placeholder="Phone" name="phone">
                <input type="submit" value="Поиск" id="done" name="send">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>

        </div>
    </div>
<div class="container">
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Phone</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->surname }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->created_at }}</td>
                        <td>{{ $client->updated_at }}</td>
                        <td><a href="delClient/{{ $client->id }}">Delete</a></td>
                        <td><a href="#" onclick="setId({{ $client->id }})" id='edit'>Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <form id="formEdit" name="form" style="display: none" action="editClient" method="post">
            <input placeholder="Name" name="name" id="name">
            <input placeholder="Surame" name="surname" id="surname">
            <input placeholder="Phone" name="phone" id="phone">
            <input type="hidden" name='id' id="hidden-id" value=""/>
            <input type="submit" value="Отправить" id="done" name="send">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>

    </div>
</div>
</body>
</html>

