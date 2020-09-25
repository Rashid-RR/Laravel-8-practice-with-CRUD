<div>
    <form action="fileupload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="file">
        <button type="submit">Save</button>
    </form>
</div>