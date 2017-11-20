<!DOCTYPE html>
<html lang="en">
<head>
    {block name="head"}
        <meta charset="UTF-8">
        <title>Test task</title>
        <meta name="description" content="Test task description"/>
        <meta name='viewport' content='width=device-width, initial-scale=1'/>
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/datatables.css"/>
        <script src="js/lib/jquery-3.2.1.js"></script>
        <script src="js/lib/bootstrap.bundle.js"></script>
        <script src="js/lib/datatables.js"></script>
        {foreach from=$js item=$js_path}
        <script src="{$js_path}"></script>
        {/foreach}
    {/block}
</head>
<body>

    <header class="main-header">
        <h1>Test task</h1>
    </header>

    <main class="main-body">
        <table id="testRecordTable" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>#</th>
                <th>SKU</th>
                <th>Description</th>
                <th>Notes</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
    </main>

</body>
</html>