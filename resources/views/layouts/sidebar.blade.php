<div id="sidebar">
    <div class="img-iopex">
        <img src="/resources/logo/lara_logo.jpg">        
    </div>

    <div class="sidebar-row">
      @if(Auth::user()->isAdmin == 1)
        <div class="sidebar-cont" id="show-dashboard">
            <a href="/">
              <img src="/resources/icons/dash-gray.png" class="dashicon">
              <label class="{{ Request::is('/') ? 'active' : '' }}" id="sidebar-lbl-dashboard">DASHBOARD</label>
            </a>
        </div>
        <div class="sidebar-cont" id="show-inventory">
          <a href="/business">
            <img src="/resources/icons/inventory-gray.png" class="invicon">
            <label class="{{ Request::is('business') ? 'active' : '' }}" id="sidebar-lbl-inventory">BUSINESS</label>          
          </a>
        </div>
        <div class="sidebar-cont" id="show-server">
          <a href="/activerequest">
            <img src="/resources/icons/purchase-gray.png" class="servericon">
            <label class="{{ Request::is('activerequest') ? 'active' : '' }}" id="sidebar-lbl-server">ACTIVE REQUESTS</label>
          </a>
        </div>
        <div class="sidebar-cont" id="show-server">
          <a href="/purchaseform">
            <img src="/resources/icons/server-gray.png" class="servericon">
            <label class="{{ Request::is('purchaseform') ? 'active' : '' }}" id="sidebar-lbl-server">Purchase Form</label>
          </a>
        </div>
        <div class="sidebar-cont" id="show-voicedid">
          <a href="/recurringform">
            <img src="/resources/icons/voicedid-gray.png" class="voicedidicon">
            <label class="{{ Request::is('recurringform') ? 'active' : '' }}" id="sidebar-lbl-voicedid">Recurring Form</label>
          </a>
        </div>
        <div class="sidebar-cont" id="show-ip">
          <a href="/genusers/accounts">
            <img src="/resources/icons/ip-gray.png" class="ipicon">
            <label class="{{ Request::is('genusers/accounts') ? 'active' : '' }}" id="sidebar-lbl-ip">Lead Gen Accounts</label>
          </a>
        </div>
        <div class="sidebar-cont" id="show-pm">
          <a href="/genusers/users">
            <img src="/resources/icons/pm-gray.png" class="pmicon">
            <label class="{{ Request::is('genusers/users') ? 'active' : '' }}" id="sidebar-lbl-pm">Lead Gen Users</label>
          </a>
        </div>
        <div class="sidebar-cont" id="show-pm">
          <a href="/customers/business">
            <img src="/resources/icons/change-gray.png" class="pmicon">
            <label class="{{ Request::is('customers/business') ? 'active' : '' }}" id="sidebar-lbl-pm">Business Users</label>
          </a>
        </div>
       {{--  <div class="sidebar-cont" id="show-pm">
          <a href="/customers/normal">
            <img src="/resources/icons/change-gray.png" class="pmicon">
            <label class="{{ Request::is('') ? 'active' : '' }}" id="sidebar-lbl-pm">Normal Users</label>
          </a>
        </div>  --}}
      {{--   <div class="sidebar-cont" id="show-pm">
          <a href="/products">
            <img src="/resources/icons/inventory-gray.png" class="pmicon">
            <label class="{{ Request::is('') ? 'active' : '' }}" id="sidebar-lbl-pm">Products</label>
          </a>
        </div>  --}}
       
        <div class="sidebar-cont" id="show-pm">
          <a href="/configuration">
            <img src="/resources/icons/pm-gray.png" class="pmicon">
            <label class="{{ Request::is('configuration') ? 'active' : '' }}" id="sidebar-lbl-pm">Configuration</label>
          </a>
        </div>
         <div class="sidebar-cont" id="show-pm">
            <a href="https://pay.gocardless.com/AL0001SY0GM4NA" target="_blank">
              <img src="/resources/icons/inventory-gray.png" class="pmicon">
              <label id="sidebar-lbl-pm">Setup Direct Debit</label>
            </a>
          </div> 
       
      @elseif(Auth::user()->isAdmin == 2)
          <div class="sidebar-cont" id="show-server">
            <a href="/">
              <img src="/resources/icons/purchase-gray.png" class="servericon">
              <label class="{{ Request::is('/') ? 'active' : '' }}" id="sidebar-lbl-server">ACTIVE REQUESTS</label>
            </a>
          </div>
          <div class="sidebar-cont" id="show-server">
            <a href="/submit_request/0">
              <img src="/resources/icons/server-gray.png" class="servericon">
              <label class="{{ Request::is('submit_request/0') ? 'active' : '' }}" id="sidebar-lbl-server">Submit a Lead</label>
            </a>
          </div>
          <div class="sidebar-cont" id="show-voicedid">
            <a href="/submitted_leads">
              <img src="/resources/icons/voicedid-gray.png" class="voicedidicon">
              <label class="{{ Request::is('submitted_leads') ? 'active' : '' }}"  id="sidebar-lbl-voicedid">My Billables</label>
            </a>
          </div>
          {{-- <div class="sidebar-cont" id="show-voicedid">
            <a href="/recurringform">
              <img src="/resources/icons/voicedid-gray.png" class="voicedidicon">
              <label class="{{ Request::is('') ? 'active' : '' }}" id="sidebar-lbl-voicedid">Account Settings</label>
            </a>
          </div> --}}
          
          @else
            <div class="sidebar-cont" id="show-dashboard">
                <a href="/">
                  <img src="/resources/icons/dash-gray.png" class="dashicon">
                  <label class="{{ Request::is('/') ? 'active' : '' }}" id="sidebar-lbl-dashboard">Dashboard</label>
                </a>
            </div>
             <div class="sidebar-cont" id="show-server">
              <a href="/purchaseform">
                <img src="/resources/icons/server-gray.png" class="servericon">
                <label class="{{ Request::is('purchaseform') ? 'active' : '' }}" id="sidebar-lbl-server">Purchase Form</label>
              </a>
            </div>
            <div class="sidebar-cont" id="show-voicedid">
              <a href="/recurringform">
                <img src="/resources/icons/voicedid-gray.png" class="voicedidicon">
                <label class="{{ Request::is('recurringform') ? 'active' : '' }}" id="sidebar-lbl-voicedid">Recurring Form</label>
              </a>
            </div>
            <div class="sidebar-cont" id="show-server">
              <a href="/business_list/pending">
                  @php
                  $url = url()->current();
                  @endphp
                <img src="/resources/icons/purchase-gray.png" class="servericon">
                <label class="{{ strpos($url, 'pending') ? 'active' : '' }}" id="sidebar-lbl-server">ACTIVE REQUESTS</label>
              </a>
            </div>
            <div class="sidebar-cont" id="show-server">
              <a href="/business_list/completed">
                <img src="/resources/icons/purchase-gray.png" class="servericon">
                <label class="{{ Request::is('business_list/completed') ? 'active' : '' }}" id="sidebar-lbl-server">Completed Requests</label>
              </a>
            </div>
             <div class="sidebar-cont" id="show-pm">
            <a href="https://pay.gocardless.com/AL0001SY0GM4NA" target="_blank">
              <img src="/resources/icons/inventory-gray.png" class="pmicon">
              <label id="sidebar-lbl-pm">Setup Direct Debit</label>
            </a>
          </div> 
            {{-- <div class="sidebar-cont" id="show-server">
              <a href="#">
                <img src="/resources/icons/pm-gray.png" class="servericon">
                <label class="{{ Request::is('') ? 'active' : '' }}" id="sidebar-lbl-server">Support</label>
              </a>
            </div>
            <div class="sidebar-cont" id="show-server">
              <a href="/activerequest">
                <img src="/resources/icons/purchase-gray.png" class="servericon">
                <label class="{{ Request::is('') ? 'active' : '' }}" id="sidebar-lbl-server">Account Settings</label>
              </a>
            </div>
            <div class="sidebar-cont" id="show-server">
              <a href="/activerequest">
                <img src="/resources/icons/purchase-gray.png" class="servericon">
                <label class="{{ Request::is('') ? 'active' : '' }}" id="sidebar-lbl-server">Exit & Entry</label>
              </a>
            </div> --}}
           
            
          @endif  
          
          <div class="sidebar-cont" id="show-server">
              <a href="/support">
                <img src="/resources/icons/headset.png" class="servericon">
                <label class="{{ Request::is('support') ? 'active' : '' }}" id="sidebar-lbl-server">Support</label>
              </a>
            </div>
          
    </div> 
</div>