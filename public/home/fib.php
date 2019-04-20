

                    <?php
                   
                     $id=$_POST['id'];
                     if($id=="")
                     {
                        $id=10;
                     }
                    /*echo $id;*/
                    $fib_url='https://fibonacciservice.azurewebsites.net/api/fibonacci/'.$id;
                    $fib_json= file_get_contents($fib_url);
                    $fib_array= json_decode($fib_json,true);
                    //print_r($fib_array);
                    foreach ($fib_array as $key => $value) 
                    {   
                        echo "<tr>";
                        echo "<td>".$key."</td>";
                        echo "<td>".$value."</td>";
                        echo "</tr>";
                    }
                    ?>
                  
                    