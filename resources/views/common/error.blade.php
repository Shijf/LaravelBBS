@if (count($errors) > 0 )

    <div class="alert alert-danger">
        <h4>有错误发生 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></h4>

        <ul>
            @foreach ($errors->all() as $error )
                <li>

                    <i class="glyphicon glyphicon-remove"> </i>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>

@endif
