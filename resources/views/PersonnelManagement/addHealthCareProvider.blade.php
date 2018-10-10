@extends('layout')

@section('title', "Personnel Management")


@section('content')
	<form>
		<div id="healthCareProviderForm">
			<label>
				ID: <input type="text" placeholder="ID" required="true">
				<input type="button" name="addID" class="addElement" value="add ID">
			</label>
			<label>
				Name: 
				<input type="text" id="healthCareProviderName" placeholder="Provider Name" required="true">
			</label>

			<label>
				Address: 
				<input type="text" id="healthCareProviderAddress" placeholder="Address">
			</label>

			<label>
				Telecomunication Address: 
				<input type="text" id="healthCareProviderTelecomunicationAddress" placeholder="+1234567890">
				<label>
					<input type="text" placeholder="+12345677">
					capabilities: 
					<select>
						<option value="voice">Voice</option>
					</select>
					<input type="button" name="addUse" value="Add Use">
				</label>
				<input type="text" placeholder="+1234567565">
			</label>

			<label>
				Status:
				<select>
				@foreach ($RoleStatus as $value => $data)
					<option value="{{ $value }}">{{ $data }}</option>
				@endforeach
				</select>
			</label>

			<label>
				<fieldset>
					<legend>Effective Time</legend>
					From: <input type="date">/<input type="time" name="time">
					To: <input type="date">/<input type="time" name="time">
				</fieldset>
			</label>
		</div>

		<div id="Principal_Person">
			<label>
				Id: <input type="text" name="ID" placeholder="ID">
			</label>

			<label>
				Name: <input type="text" placeholder="Name">
			</label>

			<label>
				Gender: 
				<select>
				@foreach ($AdministrativeGender as $value => $data)
					<option value="{{ $value }}">{{ $data }}</option>
				@endforeach
				</select>
			</label>

			<label>
				Birth Date: <input type="date">//<input type="time">
			</label>
		</div>
	</form>
@endsection

<!-- In this case we just overwrite the previous sidebar -->
@section('sidebar')
	<h2>Overwrited sidebar</h2>
@endsection