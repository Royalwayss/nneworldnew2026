<div class="tab-pane fade my-acc-sub-heading @if($active_tab == 'message') show active @endif" id="tab2" role="tabpanel">
                        <h4>Message</h4>
                        <div class="acc-content" style="">
                            <table class="table financial-table">
                                <thead class="custom-table-header">
                                    <tr>
                                        <th class="date-col">Due Date</th>
                                        <th class="title-col">Message</th>
                                        <th class="title-col">Status</th>
                                        <th class="document-col">Update Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($messages as $message)
								   <tr>
                                        <td>{{  date("d-m-Y", strtotime($message['due_date'])) }}</td> <!-- Empty date cell -->
                                        <td>{{ $message['message'] }}</td>
                                        <td>{{ $message['message_status'] }}</td>
                                        <td>
                                            <i  data-id="{{ $message['id'] }}"  class="messageModal fa fa-pencil " data-toggle="modal"
                                                data-target="#messageModal" aria-hidden="true"></i>
                                        </td>
                                    </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    