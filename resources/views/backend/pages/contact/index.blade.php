@extends('backend.layouts.master')

@section('content')
    
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">Bracket</a>
      <a class="breadcrumb-item" href="#">Tables</a>
      <span class="breadcrumb-item active">Data Table</span>
    </nav>
  </div><!-- br-pageheader -->
  <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <h4 class="tx-gray-800 mg-b-5">Data Table</h4>
    <p class="mg-b-0">DataTables is a plug-in for the jQuery Javascript library.</p>
  </div>

  <div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-15p">NO</th>
              <th class="wd-15p">Address</th>
              <th class="wd-15p">Email</th>
              <th class="wd-20p">Phone</th>
              <th class="wd-15p">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contacts as $contact)   
            <tr>
              <td>{{ ++$loop->index }}</td>
              <td>{{ $contact->address }}</td>
              <td>{{ $contact->email }}</td>
              <td>{{ $contact->phone }}</td>
              <td><a class="fas fa-pencil-alt btn-sm btn-primary" href="{{ route('admin.contact.edit', $contact->id) }}"></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- table-wrapper -->


@endsection