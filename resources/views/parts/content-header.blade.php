<div class="app-content-header">
            <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                {{-- // Se existe a seção page-title ou conteúdo, exibe o título da página --}}
                @hasSection('page-title')
                <h3 class="mb-0">@yield('page-title')</h3>
                @endif

                {{-- // Se existe a variável breadcrumbs, exibe o título da página --}}
                @isset($breadcrumbs)
                    <ol class="breadcrumb">
                        @foreach($breadcrumbs as $breadcrumb)
                            <li class="breadcrumb-item"><a href="#">{{$breadcrumb['label']}}</a></li>
                        @endforeach
                    </ol>
                @endisset

              </div>
              <div class="col-sm-6 text-end">
                    @yield('page-actions')
              </div>
            </div>
            <!--end::Row-->
        </div>
          <!--end::Container-->
</div>
