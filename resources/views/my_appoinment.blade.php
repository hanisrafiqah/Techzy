@extends('layouts.app')
@section('content')
<section class="dashboard d-flex py-5">
    <div class="container mt-4">
        <div class="row mt-5">

            <div align="center">
                <table>
                    <tr style="background-color:black;">
                        <th style="padding:10px;font: size 20px;color:white;">Counsellor Name</th>
                        <th style="padding:10px;font: size 20px;color:white;">Date</th>
                        <th style="padding:10px;font: size 20px;color:white;">time</th>
                        <th style="padding:10px;font: size 20px;color:white;">Action</th>
                    </tr>
                    <tr>
                        <td style="color: white;">Dr Amalina</td>
                        <td style="color: white;">23/12/2022</td>
                        <td style="color: white;">11.30am</td>
                        <td style="color: white;"><button onclick="myreject()">Reject</button></td>
                        <td style="color: white;"><button onclick="myFunction()">Approved</button></td>
                    </tr>
                    <script>
                        function myFunction() {
                            alert("Approved!");
                        }
                    </script>
                    <script>
                        function myreject() {
                            alert("Rejected!");
                        }
                    </script>

                </table>
            </div>
        </div>
    </div>
    </section>
@endsection
@section('scripts')
<script src="https://kit.fontawesome.com/3b8c65f5c7.js" crossorigin="anonymous"></script>
@endsection
