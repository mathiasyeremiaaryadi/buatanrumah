@extends('admin_layout.master')

@section('title', 'Admin CMS | Kelola Akun Re-Seller')

@section('admin_content')
<div class="content">
    <div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
        <div class="p-1">
            
            <!-- Title Re-Seller Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <h1 class="title">Data Akun Re-Seller</h1>
                </div>
            </div>
            <!-- End Title Re-Seller Account Table -->

            <!-- Search Re-Seller Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column is-9-desktop is-12-mobile">
                    <form method="post" action="{{ url()->current() }}">
                        @csrf
                        <div class="control has-icons-right">
                            <input class="input is-medium @error('reseller_keyword') is-danger @enderror" name="reseller_keyword" type="text" placeholder="Cari Akun Pemasak">
                            <span class="icon is-right">
                                <i class="fas fa-search"></i>
                            </span>

                            @error('reseller_keyword')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="column is-2-desktop is-12-mobile">
                    <a href="/admin/re-seller" class="button reset-button is-danger is-rounded is-fullwidth-mobile is-medium">Reset Pencarian</a>
                </div>
            </div>
            <!-- End Search Re-Seller Account Table -->

            <!-- Re-Seller Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                
                    @if(session('reseller_not_found'))

                    <div class="content">
                        <h3 class="has-text-centered flash-message">-- {{ @session('reseller_not_found') }} --</h3>
                    </div>

                    @else

                    <div class="table-container">
                        <table class="table table-data is-hoverable is-fullwidth">
                            <thead>
                                <th>#</th>
                                <th>Nama Re-Seller</th>
                                <th>Foto Re-Seller</th>
                                <th>E-mail Re-Seller</th>
                                <th>Nomor Telepon Re-Seller</th>
                                <th>Alamat Re-Seller</th>
                            </thead>
                            <tbody>
                                
                                @foreach($resellers as $index => $reseller)
                                <tr>
                                    <td>{{ $index + $resellers->firstItem() }}</td>
                                    <td>{{ ucwords($reseller->name) }}</td>

                                    @if($reseller->reseller_image == '')

                                    <td>-----</td>

                                    @else

                                    <td>
                                        <img src="{{ asset('reseller_assets/images/' . $reseller->reseller_image) }}" width="150" height="140" alt="Foto Pemasak">
                                    </td>

                                    @endif

                                    <td>{{ $reseller->email }}</td>
                                    <td>{{ ($reseller->phone_call == '') ? '-----' :  $reseller->phone_call }}</td>
                                    <td>{{ ($reseller->address == '') ? '-----' : ucwords($reseller->address) }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    {{ $resellers->links() }}

                    @endif

                </div>
            </div>
            <!-- End Re-Seller Account Table -->

        </div>
    </div>
</div>
@endsection


