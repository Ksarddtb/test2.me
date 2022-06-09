<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('auth.Generate') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <h3>List with Jquery</h3>
                <ul id="list">

                </ul>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        $(document).ready(function(){
            console.log('JQuery Init');
        function addLi(item){
            let children
            let item_blog='.item_blog'+item['id'];
            let item_li='<li id="list'+item['id']+'" class="list-group-item" style="color:rgb'+item['style']+'">'+item['text'];
                if(item['children'].length>0){
                children='<ul style="padding: 0px 15px;display: none;" class="item_blog'+item['id']+'">';
                $.each(item.children,function(key,value){
                    let item_blog='.item_blog'+value['id'];
                    children=children+addLi(value);
                });
                children=children+'</ul>';
            }
            item_li=item_li+children+'</li>';
            return item_li;
        };
        $.ajax({
            url: '{{ route('test') }}',
            type: "POST",
            headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (success) {
            console.log(success);
            var items = success.data;
            console.log(items)
                $.each(items,function(key,item){
                    $('#list').append(addLi(item));
                      if(item['children'].length>0){
                    }
                    console.log(item['children'].length);
                })
             }
          });
          $(document).on('click',function(){
            $(".list-group-item").click(function() {
                if($(this).children("ul").is(":visible")) {
                    $(this).children("ul").fadeOut("slow");
                }
                else{
                    $(this).children('ul').fadeIn("slow");
                }
            return false;
            });
          })
        });
    </script>

    @endpush
</x-app-layout>
