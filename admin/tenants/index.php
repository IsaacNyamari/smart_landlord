<?php
include("../header.php");
include("../side_bar.php");
?>
<!-- Main -->
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manage</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a class="active" href="../">Dashboard</a></li>
                <li class="breadcrumb-item active"><a class="active" href="<?php echo $_SERVER['REQUEST_URI']?>">Tenants</a></li></li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

            <div class="card bg-light">
                    <div class="card-body">
                        <div class="card-title d-flex">
                            <div>
                                <button class="btn btn-success">Download PDF</button>
                                <button class="btn btn-warning">Download CSV</button>
                            </div>
                            <div style="margin-left: auto;">
                                <button class="btn btn-info">Add <i class="fa fa-edit"></i></button>
                            </div>
                        </div>
                        <hr>
                        <!-- Table with stripped rows -->
                        <table id="myTable" class="table table-secondary table-hover display">
                            <thead>
                                <tr>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                                    <th>Column 2</th>
                                    <th>Column 2</th>
                                    <th>Column 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Walker Nixon</td>
                                    <td>6901</td>
                                    <td>Metz</td>
                                    <td>2011/12/11</td>
                                    <td>41%</td>
                                </tr>
                                <tr>
                                    <td>Nathan Espinoza</td>
                                    <td>5956</td>
                                    <td>Strathcona County</td>
                                    <td>2002/25/01</td>
                                    <td>47%</td>
                                </tr>
                                <tr>
                                    <td>Kelly Cameron</td>
                                    <td>4836</td>
                                    <td>Fontaine-Valmont</td>
                                    <td>1999/02/07</td>
                                    <td>24%</td>
                                </tr>
                                <tr>
                                    <td>Kyra Moses</td>
                                    <td>3796</td>
                                    <td>Quenast</td>
                                    <td>1998/07/07</td>
                                    <td>68%</td>
                                </tr>
                                <tr>
                                    <td>Grace Bishop</td>
                                    <td>8340</td>
                                    <td>Rodez</td>
                                    <td>2012/02/10</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>Haviva Hernandez</td>
                                    <td>8136</td>
                                    <td>Suwałki</td>
                                    <td>2000/30/01</td>
                                    <td>16%</td>
                                </tr>
                                <tr>
                                    <td>Alisa Horn</td>
                                    <td>9853</td>
                                    <td>Ucluelet</td>
                                    <td>2007/01/11</td>
                                    <td>39%</td>
                                </tr>
                                <tr>
                                    <td>Zelenia Roman</td>
                                    <td>7516</td>
                                    <td>Redwater</td>
                                    <td>2012/03/03</td>
                                    <td>31%</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<!--End of Main -->
<?php include("../footer.php") ?>