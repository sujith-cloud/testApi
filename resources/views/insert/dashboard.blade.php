<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<div class="container">
<h1>Home , hi {{$sujith_data}}</h1>

</div>
    <div class="row">
           <div class="col-md-3 text-center">
                <form action="/insert_data" method="GET">
                    <input type="text" name="name" placeholder="Type Name Here"/></br></br>
                    <input type="text" name="age" placeholder="Type Age Here"/></br></br>
                    <input type="text" name="contact" placeholder="Type Contact Here"/></br></br>
                    <textarea type="text" name="note" style="height:200px" placeholder="Type Note Here"></textarea></br> </br>
                    <input type="submit" class="btn btn-primary" value="Insert Data">
                </form>
            </div>


               <div class="col-md-9">
                       <div class="container">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Name</th>
                              <th scope="col">Age</th>
                              <th scope="col">Contact</th>
                              <th scope="col">Note</th>
                            </tr>
                          </thead>
                          <tbody>
                            @isset($all_data)
                                @foreach($all_data as $all_datab)
                                        <tr>
                                          <th scope="row">{{$all_datab->id}}</th>
                                          <td>{{$all_datab->name}}</td>
                                          <td>{{$all_datab->age}}</td>
                                          <td>{{$all_datab->contact}}</td>
                                          <td>{{$all_datab->note}}</td>
                                        </tr>
                                    @endforeach
                            @endisset
                          </tbody>
                        </table>
                        </div>
                </div>
    </div>
    </br>



</html>
