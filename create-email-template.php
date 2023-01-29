<?php include_once './includes/header.php'; ?>

<div class="content-header">
    <div class="content-header-title">Email Template</div>
</div>
<div class="content-body">
    <div class="card no-shadow">
        <div class="card-body">
            <form class="box-gy-4">
                <div class="d-flex justify-content-between">
                    <div class="font-lg d-flex box-gx-2">
                        <div>Email Title :</div>
                        <div>Food & Engineering Tender, UK</div>
                    </div>
                    <div class="font-weight-sm">This email is controlled by : <strong class="text-primary">Jewel
                            Majumder</strong>
                    </div>
                </div>
                <div class="row-divider"></div>
                <div class="d-flex align-items-center">
                    <span class="font-lg">To:</span>
                    <div class="form-group form-group-type-text flex-1">
                        <input type="text" placeholder="Type email or select Team member/Department"
                            class="form-control form-control-sm  font-lg font-weight-sm">
                    </div>
                    <div class="form-group w-150">
                        <select class="form-control form-control-rounded form-control-lg font-lg font-weight-sm">
                            <option value="">Select Member</option>
                        </select>
                    </div>
                </div>

                <div>
                    <textarea class="form-control min-h-200 font-xl font-weight-sm w-100"
                        placeholder="Type your message" id="basic-example"></textarea>
                </div>
            </form>
            <div class="d-flex justify-content-between mt-5">
                <div class="box-gx-6">
                    <span class="dropdown-menu-icon material-icons-outlined">attach_file</span>
                    <span class="dropdown-menu-icon material-icons-outlined">link</span>
                    <span class="dropdown-menu-icon material-icons-outlined">emoji_emotions</span>
                    <span class="dropdown-menu-icon material-icons-outlined">image</span>
                </div>
                <div class="d-flex justify-content-center box-gx-4">
                    <button class="btn btn-rounded btn-lg btn-muted font-lg font-weight-sm">Cancel</button>
                    <button class="btn btn-rounded btn-lg btn-primary font-lg font-weight-sm">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once './includes/footer.php'; ?>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: 'textarea#basic-example',
    menubar: false,
    plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});
</script>