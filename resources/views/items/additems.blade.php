@extends('layouts.itemlayout')<!-- Define Which layout you are using -->

@section('title', 'Item Page Title') <!-- Section that you are defin in the view -->

@section('main_nav', 'Main Nav bar')

@section('content')

{!! Form::open(array('url' => 'items/save')) !!} 
 <table width="439" cellpadding="5" cellspacing="0" summary="shows up when a user wants to log in the system">
  <tbody>
    <tr>
      <td height="34" colspan="2"><div align="center">
        <h1>ENTER YOUR DETAILS TO LOG IN</h1>
      </div></td>
    </tr>
    <tr>
      <td height="24"><div align="left">
        <h2>{!!  Form::label('username', 'USERNAME') !!} </h2>
      </div></td>
      <td height="24">{!!  Form::text('username'), Input::old('username')  !!}  </td>
    </tr>
    <tr>
      <td width="86" height="23"><h2> {!!  Form::label('password', 'PASSWORD')  !!} </h2></td>
      <td width="327" height="23">{!!  Form::password('password')  !!}  </td>
    </tr>
    <tr>
      <td height="31" colspan="2"><div align="center">
        <p>
          <label>
            <div align="center">
                <h1>
                  {!! Form::radio('staffstudent[]', 'staff', false)  !!} 
                  {!! Form::label('staff', 'STAFF')  !!} 

                  {!! Form::radio('staffstudent[]', 'student', false)  !!} 
                  {!! Form::label('student', 'STUDENT')  !!} 
                   </h1>
            </div>
          </label>
        </p>
        <div align="center">
          {!!  Form::submit('Log In')  !!} 
        </div>
      </div></td>
    </tr>
    <tr>
      <td height="31" colspan="2"><div align="center">
        <a href="resetpassword.php"><h3>Forgot Password</h3></a>
      </div></td>
    </tr>
  </tbody>
</table> 
{!! Form::close() !!}


@endsection
