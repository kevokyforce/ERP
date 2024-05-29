<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        
        @if(auth()->user()->is_admin)
            <x-admin-links></x-admin-links>
            @elseif (auth()->user()->is_client)
            <x-client-links></x-client-links>
            @elseif (auth()->user()->is_employee)
            <x-employee-links></x-employee-links>
            @elseif (auth()->user()->is_supplier)
            <x-supplier-links></x-supplier-links>
        @endif
    </div>
</div>