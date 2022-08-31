<x-layout>
  <h1>Member List</h1>
  <?php
  $data = DB::table('users')->get('name');
  foreach ($data as $key => $value) {
   echo($value->name."<br>"); 
  }  
  ?>
</x-layout>