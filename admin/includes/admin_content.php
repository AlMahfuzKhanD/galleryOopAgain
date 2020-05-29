<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Home
                            <small>Editted</small>
                        </h1>
                        <?php 

                        //$user = new User();

                        // $result = User::findAll();
                        // while($user = mysqli_fetch_array($result)){
                        //     echo $user['userName'] ."<br>";
                        // }
                        



                        // $result = User::findById(11);
                        // $user = User::instantiation($result);


                        // echo $user->id;

                        $users = User::findAll();
                        foreach ($users as $user) {
                            echo $user->id . "<br>";
                        }
                        
                        ?>

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>