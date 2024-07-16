<h1>Users Edit Page</h1>
<p>This is edit page with id</p>

<div>
    <div>
        <from action="{{ url('users', $id) }}" method="POST">
        @csrf 
        @method ('PUT')
                <div> class="form group">
                    <div class="fullname" class="form-label">fullname</label>
                    <input type="text" class="form control"/>
                </div>
                <div>
                    <bottom>Submit</submit>
                 </div>
        </form>
</div>

