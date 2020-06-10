 
                        
                             @if($user_status == 1) 
                             <a href="javascript:void(0)" style="margin-left: 10px" title="Blok et"><i id="{{ $id }}" data-id='{{ $id }}' style="color:red;" class="fa fa-ban blokla" aria-hidden="true"></i></a>

                              @else 
                              <a href="javascript:void(0)" style="margin-left: 16px" title="Aktiv et"><i id="{{ $id }}" data-id='{{ $id }}' style="color:green;" class="fa fa-unlock unblokla" aria-hidden="true"></i></a>
                              @endif  
<!-- <a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{ $id }}" data-original-title="Edit" class="edit btn btn-success edit-product">
    Edit
</a>
<a href="javascript:void(0);" id="delete-product" data-toggle="tooltip" data-original-title="Delete" data-id="{{ $id }}" class="delete btn btn-danger">
    Delete
</a> -->
 <a href="{{route('user.edit',$id)}}"><i class="fa fa-pencil-square" style="margin-left: 10px" title="Redaktə et"></i></a>
                   
                                <a href="javascript:void(0)" style="margin-left: 10px"  data-id="{{ $id }}"  title="Sil"><i id="@php echo $id @endphp"class="fa fa-trash-o sil"></i></a>
                          