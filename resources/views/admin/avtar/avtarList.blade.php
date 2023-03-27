
<table id="avtarTable" class="table table-striped table-bordered dt-responsive mytabel" style="width:100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Avatar Name</th>
        <th>Image</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        
        @foreach ($avtar as $i => $data)
      
                <td>{{ ++$i }}</td>
                <td>{{ $data->name }}</td>
                <td>
                    <img src="{{URL::to('storage/app/public/uploads/avtar/'.$data->image)}}" alt="" width="50px" height="50px">
                </td>
                <td> <span class="{{($data->status == '1')?'green' : 'red' }} avtar-status" data-status="{{$data->status}}" data-id="{{$data->id}}">{!! ($data->status == '1')? 'Active' : 'De-active' !!}</span> </td>
                <td>
                    <ul class="action-wrap">
                        <li>
                            <a href="javascript:void(0)" id="editavtar" data-id="{{$data->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.473" height="16.473" viewBox="0 0 16.473 16.473">
                                <path id="Path_376" data-name="Path 376"
                                    d="M14.667,9.131l-1.3-1.3L4.833,16.373v1.3h1.3l8.538-8.538Zm1.3-1.3,1.3-1.3-1.3-1.3-1.3,1.3ZM6.889,19.5H3V15.613L15.315,3.3a.917.917,0,0,1,1.3,0L19.2,5.891a.917.917,0,0,1,0,1.3L6.889,19.5Z"
                                    transform="translate(-3 -3.029)" fill="#00b247" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('godmode/avtar/view',$data->slug)}}"  data-id="{{$data->id}}" data-type="avtarlist">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M1.181 12C2.121 6.88 6.608 3 12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9zM12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="deleteavtar" data-id="{{$data->id}}" data-type="avtarlist">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path
                                    d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm-8 5v6h2v-6H9zm4 0v6h2v-6h-2zM9 4v2h6V4H9z"
                                    fill="rgba(255,0,0,1)" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
