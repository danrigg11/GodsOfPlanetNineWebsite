<?php include 'header.php' ?>

<div class="container">

<form>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Title</label>
    <input type="text" class="form-control" name="Title" placeholder="Enter title...">
  </div>

  <div>
    <label for="exampleFormControlTextarea1">Textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="Textarea" placeholder="Enter text..." rows="5"></textarea>
  </div>


<label class="mt-5 mb-2 pb-0" for="exampleFormControlTextarea1">File</label>
<div class="custom-file mb-2">
  <input type="file" class="custom-file-input" id="validatedCustomFile" name="File" >
  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
  <div class="invalid-feedback">Example invalid custom file feedback</div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>




  </form>


</div>

<?php include 'footer.php' ?>
