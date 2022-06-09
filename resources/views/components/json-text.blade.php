<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            TextArea For Json Array Save.
        </h2>
    </x-slot>
    <div class="container">
    </div>
    <div class="row">
        <hr />
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Enter Your Json Please:
        </h2>
        <form action="">
            <label for="form">Content:</label>
            @csrf
            <div class="row form-group">
                <label for="styles">Родител:</label>
                <select name="parent">
                    <option value="0">Нет Родителя</option>
                </select>
            </div>
            <div class="row form-group">
                <label for="styles">Стил:</label>
                <input type="text" name="styles" style="form-control">
            </div>
            <div class="row form-group">
                <label for="styles">Текст:</label>
                <input type="text" name="styles" style="form-control">
            </div>

        </form>

    </div>

</div>
