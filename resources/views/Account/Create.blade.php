
<style>
.card {
    max-width: 500px;
    margin: 0 auto;
}

.card-header {
    background-color: #f8f9fa;
    padding: 15px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

textarea.form-control {
    resize: vertical;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: #0056b3;
}
</style>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Create New Post</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('Bstore') }}" method="POST"enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="body">Body:</label>
                        <textarea id="body" name="body" class="form-control" rows="5"></textarea>
                    </div>
                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image">

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

