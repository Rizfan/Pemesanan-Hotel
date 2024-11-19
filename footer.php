<footer>
    <div class="bg-dark text-center p-4 text-light">
        <small>Copyright &copy; 2024. Rizfan Herlaya | All rights
            reserved.</small>
    </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>



<script src="assets/my-javascript.js"></script>

<?php
if ($page == "pricelist" || $page == "history" || $page == "detail_pesanan") { ?>
    <script>
        //menghilangkan footer
        $("footer").hide();
    </script>
<?php } ?>

</body>

</html>