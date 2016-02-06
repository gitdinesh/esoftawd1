@extends('layouts.ecomweblayout')




@section("content")
  <div class="content">
 
    <p style="color:green;" id="alert_message">
   
    </p>

  {!! Form::open(array('url' => '/item/save','id'=>'frm_add_item')) !!} 
 <table width="439" cellpadding="5" cellspacing="0" summary="shows up when a user wants to log in the system">
  <tbody>
    <tr>
      <td height="34" colspan="2"><div align="center">
        <h1>Add New Items</h1>
      </div></td>
    </tr>
    <tr>
      <td height="24"><div align="left">
        <h2>{!!  Form::label('title', 'TITLE') !!} </h2>
      </div></td>
      <td height="24">{!!  Form::text('title') !!}  </td>
    </tr>
    <tr>
      <td width="86" height="23"><h2> {!!  Form::label('description', 'DESCRIPTION')  !!} </h2></td>
      <td width="327" height="23">{!!  Form::text('description')  !!}  </td>
    </tr>
    <tr>
      <td width="86" height="23"><h2> {!!  Form::label('price', 'PRICE')  !!} </h2></td>
      <td width="327" height="23">{!!  Form::text('price')  !!}  </td>
    </tr>
    <tr>
      <td height="31" colspan="2"><div align="center">
       
        </p>
        <div align="center">
          {!!  Form::submit('Add Item',['id'=>'add_item'])  !!} 
        </div>
      </div></td>
    </tr>

  </tbody>
</table> 
{!! Form::close() !!}

  </div>
@endsection
