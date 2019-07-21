<div>
    <h2>Форма для добавления аудио файла</h2>
    <form action="/sound/add?id_term=<?=$this->get->id_term?>" method="post" enctype="multipart/form-data">
        <!-- file drawing -->
        <div class="form-box">
            <label>Файл аудио:</label>
                <input type="file" name="file" required>
		</div>

        <!-- buttons -->
        <div class="button-box">
            <input type="submit" value="Добавить аудио" name="save">
            <input type="button" onclick="history.back();" value="Отменить">
        </div>
    </form>
</div>