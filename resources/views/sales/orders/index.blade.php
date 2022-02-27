<x-master>
    <x-elements.breadcrumb>
        <x-slot name="title">
            Orders
        </x-slot>
        <li class="breadcrumb-item"><a href="#">Orders</a></li>
        <li class="breadcrumb-item active">Orders</li>
    </x-elements.breadcrumb>
<section class="content">
      <div class="container-fluid">
      <div class="card">
    <div class="card-header">
        <!-- {{ trans('cruds.order.title_singular') }} {{ trans('global.list') }} -->
        <a href="{{ route('orders.create') }}" class="btn btn-primary">Create</a>
    </div>
    

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Order">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            <!-- {{ trans('cruds.order.fields.id') }} -->
                            Id
                        </th>
                        <th>
                            <!-- {{ trans('cruds.order.fields.customer_name') }} -->
                            Customer Name
                        </th>
                        <th>
                            <!-- {{ trans('cruds.order.fields.customer_email') }} -->
                            Customer Email
                        </th>

                        <th>
                            <!-- {{ trans('cruds.order.fields.customer_email') }} -->
                            Salesperson
                        </th>

                        <th>
                            <!-- {{ trans('cruds.order.fields.customer_email') }} -->
                            Payment Method
                        </th>

                        

                        <th>
                            <!-- {{ trans('cruds.order.fields.products') }} -->
                            Products
                        </th>

                        <th>
                            <!-- {{ trans('cruds.order.fields.products') }} -->
                            Total Amount
                        </th>

                        <th>
                            <!-- {{ trans('cruds.order.fields.customer_email') }} -->
                            Status
                        </th>
                        <!-- <th>
                            &nbsp;
                        </th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $key => $order)
                        <tr data-entry-id="{{ $order->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $order->id ?? '' }}
                            </td>
                            <td>
                                {{ $order->customer_name ?? '' }}
                            </td>
                            <td>
                                {{ $order->customer_email ?? '' }}
                            </td>

                            <td>
                                {{ $order->user->name ?? '' }}
                            </td>

                            <td>
                                {{ $order->payment_method ?? '' }}
                            </td>
                            

                            <td>
                                <ul>
                                @foreach($order->products as $key => $item)
                                    <li>{{ $item->name }} ({{ $item->pivot->quantity }} x ${{ $item->price }})</li>
                                @endforeach
                                </ul>
                            </td>

                            <td>{{ $order->totalAmount }}</td>

                            <td>
                                {{ $order->status ?? '' }}
                            </td>
                            <!-- <td>
                                @can('order_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.orders.show', $order->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('order_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.orders.edit', $order->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('order_delete')
                                    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td> -->

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</x-master>