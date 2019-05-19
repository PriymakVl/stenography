<div id="form-image-wrp">
    <h2>Форма для добавления изображения</h2>
    <form action="/image/add?id_term=<?=$this->get->id_term?>" method="post" enctype="multipart/form-data">
        <!-- file drawing -->
        <div class="form-box">
            <label>Файл изображения:</label>
                <input type="file" name="file" required>
		</div>

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Добавить изображение" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>