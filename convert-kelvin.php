<?php include '_head.php' ?>
<?php include '_header.php' ?>
<main>
    
    <?php if (!empty($_POST['temperature']) && $_POST['temperature'] >= 0) : ?>
        <div class="form-group">
            <h1>Résutat de la conversion</h1>
            <?php if ($_POST['unit'] === 'kelvin') : ?>
                <p>
                <?php echo $_POST['temperature'] ?> Kelvin équivaut à <?php echo $_POST['temperature'] - 273.1 ?> °Celsius
                </p>
            <?php else: ?>
                <p>
                <?php echo $_POST['temperature'] ?> F équivaut à <?php echo ($_POST['temperature'] - 32) * 5/9 ?> °C
                </p>
            <?php endif; ?>    
        </div>
    <?php endif; ?>
    <form action="" method="post">
        <div class="form-group">
            <label for="unit">Choisissez votre unité</label>
            <select name="unit" id="unit">
                <option value="kelvin">Kelvin</option>
                <option value="farhrenheit">Farhrenheit</option>
            </select>
        </div>
        <div class="form-group">
            <label for="temperature">Température</label>
            <input type="number" name="temperature" id="temperature" min="0">
        </div>

        <button class="btn" type="submit">Convert!</button>
    </form>
</main>
<?php include '_footer.php' ?>