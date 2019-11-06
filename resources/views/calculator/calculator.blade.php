<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="mt-5">
            <h1 class="text-center">Simple Math Calculator</h1>
            @if (count($errors->all()))
            <section class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </section>
            @endif
            <form method="POST" action="{{route("calculator")}}">
                <div class="form-row d-flex justify-content-center">
                    <div class="col-lg-2 col-sm-6">
                        <input type="text" class="form-control" id="firstNumberInput" name="firstNumberInput"
                            placeholder="First Number" value="{{Session::get("firstNumber")}}">
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <select class="custom-select mr-3" id="inlineFormCustomSelect" name="operator">
                            <option name="add" value="0">Addition (+)</option>
                            <option name="subtract" value="1">Subtraction (-)</option>
                            <option name="multiply" value="2">Multiplication (*)</option>
                            <option name="division" value="3">Division (/)</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-sm-6 mr-3">
                        <input type="text" class="form-control" id="secondNumberInput" name="secondNumberInput"
                            placeholder="Second Number" value="{{Session::get("secondNumber")}}">
                    </div>
                </div>
                <div class="form-group mt-3 text-center">
                    <input type="submit" class="btn btn-primary" value="Calculate" />
                    <a href="{{route("calculator")}}" class="btn btn-danger">Clear</a>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
        <div class="jumbotron text-center">
            @if (Session::get("add") == true)
                <h1>Hello</h1>
            @endif
            <h1 class="display-3">Number goes here</h1>
            <h2 class="display-4">The answer to 2 + 2</h2>
        </div>
    </div>
</body>

</html>


{{-- <section class="row">
    <div class="col">
        <form method="POST" action="{{route("hello-name-display")}}">
<div class="form-group">
    <label for="firstNameInput">First Name</label>
    <input type="text" class="form-control" id="firstNameInput" name=firstNameInput placeholder="i.e Tom"
        value="{{Session::get("firstName")}}">
</div>
<div class="form-group">
    <div class="form-group">
        <label for="lastNameInput">Last Name</label>
        <input type="text" class="form-control" id="lastNameInput" name="lastNameInput" placeholder="i.e Jones"
            value="{{Session::get("lastName")}}">
    </div>
    <div class="form-group">
        <div class="form-group">
            <label for="numOfTimes">Number of Times</label>
            <input type="text" class="form-control" id="numOfTimes" name="numOfTimes" placeholder="i.e 10"
                value="{{Session::get("numOfTimes")}}">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Display" />
            <a href="{{route("hello-name")}}" class="btn btn-danger">Clear</a>
        </div>
    </div>
    {{ csrf_field() }}
    </form>
</div>
</section>
<section class="row">

    @if (!count($errors->all()) && Session::has("firstName") && Session::has("lastName") && Session::has("numOfTimes"))

    <div class="col">
        <ol>
            @for ($ctr = 0; $ctr < Session::get("numOfTimes"); $ctr++) <li>Hello {{Session::get("firstName")}}
                {{Session::get("lastName")}}!</li>
                @endfor
        </ol>
    </div>
</section> --}}