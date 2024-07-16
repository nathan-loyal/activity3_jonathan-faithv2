<h1>user Index page</h2>
<p>This is EdIndexit page with id</p>

<from action="{{ url('users', $id) }}" method="post">
            @csrf
            @method('DELETE')
            <div class="form-group">
                <button class="btn btn-primary" type="submit">submit</button>
            </div>
</form>