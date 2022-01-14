<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
    <title>Review Edit</title>
</head>

<body>
    <div class="container-fluid">
@include('home.message')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Edit Review</h3>
                        <form action="{{route('admin_review_update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="form-body">

                                <div class="col-md-12">
                                    <label>Id </label>
                                    <div class="form-group">
                                        <input readonly  value="{{ $data->id }}" name="id" type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-body">

                                <div class="col-md-12">
                                    <label>Place_id </label>
                                    <div class="form-group">
                                        <input readonly value="{{ $data->place_id }}" name="place_id" type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-body">

                                <div class="col-md-12">
                                    <label>User_id </label>
                                    <div class="form-group">
                                        <input readonly value="{{ $data->user_id }}" name="user_id" type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-body">

                                <div class="col-md-12">
                                    <label>Ip </label>
                                    <div class="form-group">
                                        <input readonly value="{{ $data->ip }}" name="ip" type="text" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <div class="form-body">

                                <div class="col-md-12">
                                    <label>Subject </label>
                                    <div class="form-group">
                                        <input readonly value="{{ $data->subject }}" name="subject" type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-body">

                                <div class="col-md-12">
                                    <label>Review </label>
                                    <div class="form-group">
                                        <input readonly value="{{ $data->review }}" name="review" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-body">

                                <div class="col-md-12">
                                    <label>Rate </label>
                                    <div class="form-group">
                                        <input readonly value="{{ $data->rate }}" name="rate" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-body">

                                <div class="col-md-12">
                                    <label for="Select2">status</label>

                                    <select class="form-control" id="Select2" name="status">
                                        <option value="{{ $data->status }}" >{{ $data->status }}</option>
                                        <option value="inact" >inactive</option>
                                        <option value="act">active</option>
                                    </select>

                                </div>

                            </div>

                            <div class="form-actions">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info">Edit Review</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
