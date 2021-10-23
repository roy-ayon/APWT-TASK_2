@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body {
            background-color: #E7E0C9;
            color: #40514E;
            margin: 0;
        }
        .navbar{
            background-color: #2C2E43;
            border: 3px solid black;
            padding: 1%;
            width: 100%;
            text-decoration: none;
        }
        .navbarA {
            text-decoration: none;
            margin-left: 2%;
            margin-right: 1%;
        }
        .container{
            margin: 10% 30%;
            font-size: 30px;
            line-height: 2.5rem;
        }
        table{
            width:100%;
            margin-top: 10%;
        }
        .content-1{
            height: 25px;
            width: 80%;
            margin-bottom: 3%;
        }
        select{
            height: 30px;
            width: 83%;
        }
        .submit{
            padding-left: 40%;
            padding-right: 40%;
        }
        .myButton {
	    box-shadow: 0px 0px 0px 2px #9fb4f2;
	    background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
	    background-color:#7892c2;
	    border-radius:10px;
	    border:1px solid #4e6096;
	    display:inline-block;
	    cursor:pointer;
	    color:#ffffff;
	    font-family:Arial;
	    font-size:20px;
	    padding:10px 37px;
        margin: 50px 33%;
	    text-decoration:none;
    }
    .myButton:hover {
        background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	    background-color:#476e9e;
    }
    .myButton:active {
        position:relative;
	    top:1px;
    }
    .option{
        text-decoration: none;
        opacity: .6;
    } 
    .option:hover{
        color: black;
    }
    #option-1{
        margin-left: 25%;
    }
    </style>
</head>
<body>
    <form action="{{route('registrationpage')}}" method="post">
    {{csrf_field()}}
                <table>
                    <tr>
                        <td><label for="name">User Name :</label></td>
                        <td><input type="text" name="user_name" class="content-1"><br></td>
                    </tr>
                    @if ($errors->has('user_name'))
                        <span>
                            <strong>{{ $errors->first('user_name')}}</strong>
                        </span>
                    @endif<br>
                    <tr>
                        <td><label for="email">Email :</label></td>
                        <td><input type="text" name="email" class="content-1"><br></td>
                    </tr>
                    @if ($errors->has('email'))
                        <span>
                            <strong>{{ $errors->first('email')}}</strong>
                        </span>
                    @endif<br>
                    <tr>
                        <td><label for="phone">Phone :</label></td>
                        <td><input type="tel" name="phone" class="content-1"><br></td>
                    </tr>
                    @if ($errors->has('phone'))
                        <span>
                            <strong>{{ $errors->first('phone')}}</strong>
                        </span>
                    @endif<br>
                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td><input type="password" name="password" class="content-1" ><br></td>
                    </tr>
                    @if ($errors->has('password'))
                        <span>
                            <strong>{{ $errors->first('password')}}</strong>
                        </span>
                    @endif<br>
                </table>
                <input type="submit" name="submit" class="myButton">
     </form>
</body>
</html>

@endsection




