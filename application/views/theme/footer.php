
                    </div>
                    <div class="footer">
                        <div class="float-right">
                            10GB of <strong>250GB</strong> Free.
                        </div>
                        <div>
                            <strong>Copyright</strong> Example Company &copy; 2014-2018
                        </div>
                    </div>

                </div>
            </div>



            <!-- Mainly scripts -->
            <?php 
                echo assets_js('jquery-3.1.1.min.js');
                echo assets_js('popper.min.js');
                echo assets_js('bootstrap.js');
                echo assets_js('plugins/metisMenu/jquery.metisMenu.js');
                echo assets_js('plugins/slimscroll/jquery.slimscroll.min.js');

                echo assets_js('inspinia.js');
                echo assets_js('plugins/pace/pace.min.js');

                if (isset($external_scripts))
                {
                    foreach ($external_scripts as $script)
                    {
                        echo "<script src='{$script}'></script>";
                    }
                }
            ?>

    </body>


        <!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.1/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2019 04:31:37 GMT -->
</html>
