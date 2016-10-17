@extends('layouts.app')

@section('title', $user->fname . ' ' . $user->lname . ' - About')

@section('content')
    <div class="container">
        <div class="row">
            <div id="p-c-a" class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                  <div class="panel-body">
                    {!! Form::model($about, [
                      'url' => url('about/' . $user->id),
                      'method' => 'PUT',
                      'class' => 'form form-edit',
                      'role' => 'form',
                    ]) !!}
                      {!! Form::textarea('bio', old('bio'), ['class' => 'f-i', 'placeholder' => 'Bio']) !!}
                      <select class="f-i" name="sex">
                        <option value="" disabled selected hidden>Sex</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                      {!! Form::text('bday', date('M d, Y', strtotime(old('bday'))), ['class' => 'f-i', 'placeholder' => 'Birthday']) !!}
                      <script type="text/javascript">
                      $('input[name="bday"]').datetimepicker({
                        format: 'M d, Y'
                      });
                      </script>
                      {!! Form::text('loc', old('loc'), ['class' => 'f-i', 'placeholder' => 'Address']) !!}
                      <select class="f-i" name="pref">
                        <option value="" disabled selected hidden>Interested in</option>
                        <option value="Men">Men</option>
                        <option value="Women">Women</option>
                        <option value="Men and Women">Men and Women</option>
                      </select>
                      <select class="f-i" name="status">
                        <option value="" disabled selected hidden>Status</option>
                        <option value="Single">Single</option>
                        <option value="Engage">Engage</option>
                        <option value="Married">Married</option>
                        <option value="In an open relationship">In an open relationship</option>
                        <option value="In a relationship">In a relationship</option>
                      </select>
                      <hr>
                      <div class="col-xs-12 text-right">
                        <a href="{{ url('profile/' . $user->id . '/about') }}" class="btn btn-default btn-xs">Cancel</a>
                        {!! Form::button('Update', ['type' => 'submit', 'class' => 'btn btn-success btn-xs']) !!}
                      </div>
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection


@section('styles')
    @include('partials._style_profile')
    @include('partials._style_p_a')
@endsection

@section('scripts')
    @include('partials._script_profile')
@endsection
