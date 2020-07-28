

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/plugins/pace/pace.js"></script>
    <script src="../assets/scripts/siminta.js"></script>

    <script src="../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
  </script>
        <!-- Script -->
    <script>
    $(document).ready(function(){

        // Initialize select2
        $("#selUser").select2();

        // Read selected option
        $('#but_read').click(function(){
            var username = $('#selUser option:selected').text();
            var userid = $('#selUser').val();

            $('#result').html("id : " + userid + ", name : " + username);
        });
    });
    </script>

</body>

</html>
