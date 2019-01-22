<section class="site-content site-section-mini themed-background-muted border-bottom col-lg-8 marginTop paddingAll">
    <form action="pdf.php" method="post">
        <div class="col-md-6">
            <select class="form-control" name="id">
                <?php foreach($resultado as $cliente){
                    ?><option value="<?=$cliente->id?>"><?=$cliente->nome?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-6">
            <input type="submit" class="form-control" value="Selecionar">
        </div>
    </form>
</section>