 <select class="form-control user_role_edit" name="user_roles" >
 	   @if($user_role =="admin")  
 	   <option selected="" value="admin">Admin</option>
<option  value="user">Sayt İstifadəçisi</option>
<option  value="juri">Juri</option>
<option   value="statistik">Statistik</option>
 	    @else 
 	  <!--   <option  value="admin">Admin</option>
<option selected=""  <option  value="user">Sayt İstifadəçisi</option>
<option selected="" <option  value="juri">Juri</option>
<option selected=""  <option  value="statistik">Statistik</option> -->
 	    @endif
 	   	   @if($user_role =="user") 
 	   	    <option selected="" value="user">Sayt İstifadəçisi</option> 
 	   	    <option value="admin">Admin</option>
<option  value="juri">Juri</option>
<option   value="statistik">Statistik</option>
 	   	    @else 


 	   	     @endif
 	   	      @if($user_role =="juri")  <option selected="" value="juri">Juri</option> 
 	   	  <option value="admin">Admin</option>
<option  value="user">Sayt İstifadəçisi</option> 
<option   value="statistik">Statistik</option>
 	   	      @else

 	   	       @endif
 	   	           @if($user_role =="statistik")  
 	   	            <option selected=""  value="statistik">Statistik</option> 
 	   	            
<option value="admin">Admin</option>
<option  value="user">Sayt İstifadəçisi</option> 
 <option value="juri">Juri</option> 
 	   	            @else

 	   	             @endif
 	</select>