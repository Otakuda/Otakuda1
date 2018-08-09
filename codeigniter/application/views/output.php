<?php
	if(!empty($store ))  
 { 
    
      $output = '';
      $outputdata = '';  
      $outputtail ='';

      $output .= '
                   <table class="table table-bordered" border="1">
	                
                   <tbody >
                   ';
                  
      foreach ($store as $objects)    
	   {   
           $outputdata .= ' 
                
                    <tr> 
		            <td >'.$objects->name.'</td>
                </tr>
                <tr>
		            <td>'.$objects->address.'</td>
                </tr>
                <tr>
		            <td>'.$objects->phone.'</td>
                </tr>
                <tr>
                <td>'.$objects->hphone.'</td>
                    </tr> 
                    <div class="provinces-wrapper clearfix">
                    
                    </div>
                
           ';
        //  echo $outputdata; 
                
          }  

         $outputtail .= ' 
                         </tbody>
                         </table>
                         ';
         
         echo $output; 
         echo $outputdata; 
         echo $outputtail; 
 }  
 
 else  
 {  
      echo 'Data Not Found';  
 } 