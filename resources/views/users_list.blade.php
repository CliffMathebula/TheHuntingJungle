
@if (!empty($comments))
@foreach($comments as $comment)
<html>
   <head>
      <title>Student Management | Add</title>
   </head>

   <body>
   <form method="push" action="{{ action('UsersController@update') }}">         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Name</td>
               <td><input type='text' name='name' value="{{$comment->name}}" /></td>
            </tr>

            <tr>
               <td>email</td>
               <td><input type='email' name='email' value="{{$comment->email}}"/></td>
            </tr>

            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add student"/>
               </td>
            </tr>
         </table>
      </form>
      
   </body>
</html>
       
@endforeach
@else
@endif