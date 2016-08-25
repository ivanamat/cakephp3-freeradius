<?php $this->assign('title', 'Freeradius / Groups'); ?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?php echo __('Actions') ?></li>
        <li><?php echo $this->Html->link(__('New Group'), ['action' => 'add']) ?></li>
        <li><?php echo $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?php echo $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?php echo $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?php echo $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="groups edit large-9 medium-8 columns content">
    <?php echo $this->Form->create('Group'); ?>
        <fieldset>
            <legend><?php echo __('Add group'); ?></legend>
            <?php echo $this->Form->input('name'); ?>
            <div class="row">
                <div class="large-6 medium-6 columns">
                    <?php echo $this->element('form_attribute'); ?>
                </div>
                <div class="large-6 medium-6 columns">
                    <?php echo $this->Form->input('value'); ?>
                </div>
            </div>
            
            <div class="field_wrapper">
            </div>
            
            <hr />
            
            <div class="right">
                <?php echo $this->Form->button(__('Save'), ['class' => 'success']) ?>
                <?php echo $this->Form->button(__('Add attribute'), ['class' => 'add_button button default']); ?>
                <?php echo $this->Html->link(__('Cancel'), ['action' => 'index'],['class' => 'button']) ?>
            </div>
            <div class="clearfix"></div>
        </fieldset>
    <?php echo $this->Form->end(); ?>
</div>

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div>\n\
    <div class="row">\n\
        <div class="large-6 medium-6 columns">\n\
            <div class="input select">\n\
                <label for="attribute">Attribute</label>\n\
                <select name="attribute[]" id="attribute">\n\
                    <option value="ARAP-Challenge-Response">ARAP-Challenge-Response</option>\n\
                    <option value="ARAP-Features">ARAP-Features</option>\n\
                    <option value="ARAP-Password">ARAP-Password</option>\n\
                    <option value="ARAP-Security">ARAP-Security</option>\n\
                    <option value="ARAP-Security-Data">ARAP-Security-Data</option>\n\
                    <option value="ARAP-Zone-Access">ARAP-Zone-Access</option>\n\
                    <option value="Access-Accept">Access-Accept</option>\n\
                    <option value="Access-Challenge">Access-Challenge</option>\n\
                    <option value="Access-Reject">Access-Reject</option>\n\
                    <option value="Access-Request">Access-Request</option>\n\
                    <option value="Accounting-Request">Accounting-Request</option>\n\
                    <option value="Accounting-Response">Accounting-Response</option>\n\
                    <option value="Acct-Authentic">Acct-Authentic</option>\n\
                    <option value="Acct-Delay-Time">Acct-Delay-Time</option>\n\
                    <option value="Acct-Input-Gigawords">Acct-Input-Gigawords</option>\n\
                    <option value="Acct-Input-Octets">Acct-Input-Octets</option>\n\
                    <option value="Acct-Input-Packets">Acct-Input-Packets</option>\n\
                    <option value="Acct-Interim-Interval">Acct-Interim-Interval</option>\n\
                    <option value="Acct-Link-Count">Acct-Link-Count</option>\n\
                    <option value="Acct-Multi-Session-Id">Acct-Multi-Session-Id</option>\n\
                    <option value="Acct-Output-Gigawords">Acct-Output-Gigawords</option>\n\
                    <option value="Acct-Output-Octets">Acct-Output-Octets</option>\n\
                    <option value="Acct-Output-Packets">Acct-Output-Packets</option>\n\
                    <option value="Acct-Session-Id">Acct-Session-Id</option>\n\
                    <option value="Acct-Session-Time">Acct-Session-Time</option>\n\
                    <option value="Acct-Status-Type">Acct-Status-Type</option>\n\
                    <option value="Acct-Terminate-Cause">Acct-Terminate-Cause</option>\n\
                    <option value="Acct-Tunnel-Connection">Acct-Tunnel-Connection</option>\n\
                    <option value="Acct-Tunnel-Packets-Lost">Acct-Tunnel-Packets-Lost</option>\n\
                    <option value="CHAP-Challenge">CHAP-Challenge</option>\n\
                    <option value="CHAP-Password">CHAP-Password</option>\n\
                    <option value="Callback-Id">Callback-Id</option>\n\
                    <option value="Callback-Number">Callback-Number</option>\n\
                    <option value="Called-Station-Id">Called-Station-Id</option>\n\
                    <option value="Calling-Station-Id">Calling-Station-Id</option>\n\
                    <option value="Chargeable-User-Identity">Chargeable-User-Identity</option>\n\
                    <option value="Class">Class</option>\n\
                    <option value="Configuration-Token">Configuration-Token</option>\n\
                    <option value="Connect-Info">Connect-Info</option>\n\
                    <option value="DNS-Server-IPv6-Address">DNS-Server-IPv6-Address</option>\n\
                    <option value="DS-Lite-Tunnel-Name">DS-Lite-Tunnel-Name</option>\n\
                    <option value="Delegated-IPv6-Prefix">Delegated-IPv6-Prefix</option>\n\
                    <option value="Delegated-IPv6-Prefix-Pool">Delegated-IPv6-Prefix-Pool</option>\n\
                    <option value="EAP-Message">EAP-Message</option>\n\
                    <option value="Error-Cause">Error-Cause</option>\n\
                    <option value="Event-Timestamp">Event-Timestamp</option>\n\
                    <option value="Extended-Type-1">Extended-Type-1</option>\n\
                    <option value="Extended-Type-2">Extended-Type-2</option>\n\
                    <option value="Extended-Type-3">Extended-Type-3</option>\n\
                    <option value="Extended-Type-4">Extended-Type-4</option>\n\
                    <option value="Extended-Vendor-Specific-1">Extended-Vendor-Specific-1</option>\n\
                    <option value="Extended-Vendor-Specific-2">Extended-Vendor-Specific-2</option>\n\
                    <option value="Extended-Vendor-Specific-3">Extended-Vendor-Specific-3</option>\n\
                    <option value="Extended-Vendor-Specific-4">Extended-Vendor-Specific-4</option>\n\
                    <option value="Extended-Vendor-Specific-5">Extended-Vendor-Specific-5</option>\n\
                    <option value="Extended-Vendor-Specific-6">Extended-Vendor-Specific-6</option>\n\
                    <option value="Filter-ID">Filter-ID</option>\n\
                    <option value="Filter-Id">Filter-Id</option>\n\
                    <option value="Framed-AppleTalk-Link">Framed-AppleTalk-Link</option>\n\
                    <option value="Framed-AppleTalk-Network">Framed-AppleTalk-Network</option>\n\
                    <option value="Framed-AppleTalk-Zone">Framed-AppleTalk-Zone</option>\n\
                    <option value="Framed-Compression">Framed-Compression</option>\n\
                    <option value="Framed-IP-Address">Framed-IP-Address</option>\n\
                    <option value="Framed-IP-Netmask">Framed-IP-Netmask</option>\n\
                    <option value="Framed-IPX-Network">Framed-IPX-Network</option>\n\
                    <option value="Framed-IPv6-Address">Framed-IPv6-Address</option>\n\
                    <option value="Framed-IPv6-Pool">Framed-IPv6-Pool</option>\n\
                    <option value="Framed-IPv6-Prefix">Framed-IPv6-Prefix</option>\n\
                    <option value="Framed-IPv6-Route">Framed-IPv6-Route</option>\n\
                    <option value="Framed-Interface-Id">Framed-Interface-Id</option>\n\
                    <option value="Framed-MTU">Framed-MTU</option>\n\
                    <option value="Framed-Management-Protocol">Framed-Management-Protocol</option>\n\
                    <option value="Framed-Pool">Framed-Pool</option>\n\
                    <option value="Framed-Protocol">Framed-Protocol</option>\n\
                    <option value="Framed-Route">Framed-Route</option>\n\
                    <option value="Framed-Routing">Framed-Routing</option>\n\
                    <option value="Idle-Timeout">Idle-Timeout</option>\n\
                    <option value="Login-IP-Host">Login-IP-Host</option>\n\
                    <option value="Login-IPv6-Host">Login-IPv6-Host</option>\n\
                    <option value="Login-LAT-Group">Login-LAT-Group</option>\n\
                    <option value="Login-LAT-Node">Login-LAT-Node</option>\n\
                    <option value="Login-LAT-Port">Login-LAT-Port</option>\n\
                    <option value="Login-LAT-Service">Login-LAT-Service</option>\n\
                    <option value="Login-Service">Login-Service</option>\n\
                    <option value="Login-TCP-Port">Login-TCP-Port</option>\n\
                    <option value="Long-Extended-Type-1">Long-Extended-Type-1</option>\n\
                    <option value="Long-Extended-Type-2">Long-Extended-Type-2</option>\n\
                    <option value="MS-ARAP-Challenge">MS-ARAP-Challenge</option>\n\
                    <option value="MS-ARAP-Password-Change-Reason">MS-ARAP-Password-Change-Reason</option>\n\
                    <option value="MS-Acct-Auth-Type">MS-Acct-Auth-Type</option>\n\
                    <option value="MS-Acct-EAP-Type">MS-Acct-EAP-Type</option>\n\
                    <option value="MS-BAP-Usage">MS-BAP-Usage</option>\n\
                    <option value="MS-CHAP-CPW-1">MS-CHAP-CPW-1</option>\n\
                    <option value="MS-CHAP-CPW-2">MS-CHAP-CPW-2</option>\n\
                    <option value="MS-CHAP-Challenge">MS-CHAP-Challenge</option>\n\
                    <option value="MS-CHAP-Domain">MS-CHAP-Domain</option>\n\
                    <option value="MS-CHAP-Error">MS-CHAP-Error</option>\n\
                    <option value="MS-CHAP-LM-Enc-PW">MS-CHAP-LM-Enc-PW</option>\n\
                    <option value="MS-CHAP-MPPE-Keys">MS-CHAP-MPPE-Keys</option>\n\
                    <option value="MS-CHAP-NT-Enc-PW">MS-CHAP-NT-Enc-PW</option>\n\
                    <option value="MS-CHAP-Response">MS-CHAP-Response</option>\n\
                    <option value="MS-CHAP2-CPW">MS-CHAP2-CPW</option>\n\
                    <option value="MS-CHAP2-Response">MS-CHAP2-Response</option>\n\
                    <option value="MS-CHAP2-Success">MS-CHAP2-Success</option>\n\
                    <option value="MS-Filter">MS-Filter</option>\n\
                    <option value="MS-Link-Drop-Time-Limit">MS-Link-Drop-Time-Limit</option>\n\
                    <option value="MS-Link-Utilization-Threshold">MS-Link-Utilization-Threshold</option>\n\
                    <option value="MS-MPPE-Encryption-Policy">MS-MPPE-Encryption-Policy</option>\n\
                    <option value="MS-MPPE-Encryption-Types">MS-MPPE-Encryption-Types</option>\n\
                    <option value="MS-MPPE-Recv-Key">MS-MPPE-Recv-Key</option>\n\
                    <option value="MS-MPPE-Send-Key">MS-MPPE-Send-Key</option>\n\
                    <option value="MS-New-ARAP-Password">MS-New-ARAP-Password</option>\n\
                    <option value="MS-Old-ARAP-Password">MS-Old-ARAP-Password</option>\n\
                    <option value="MS-Primary-DNS-Server">MS-Primary-DNS-Server</option>\n\
                    <option value="MS-Primary-NBNS-Server">MS-Primary-NBNS-Server</option>\n\
                    <option value="MS-RAS-Vendor">MS-RAS-Vendor</option>\n\
                    <option value="MS-RAS-Version">MS-RAS-Version</option>\n\
                    <option value="MS-Secondary-DNS-Server">MS-Secondary-DNS-Server</option>\n\
                    <option value="MS-Secondary-NBNS-Server">MS-Secondary-NBNS-Server</option>\n\
                    <option value="Management-Policy-Id">Management-Policy-Id</option>\n\
                    <option value="Management-Privilege-Level">Management-Privilege-Level</option>\n\
                    <option value="Management-Transport-Protection">Management-Transport-Protection</option>\n\
                    <option value="Message-Authenticator">Message-Authenticator</option>\n\
                    <option value="Mobile-Node-Identifier">Mobile-Node-Identifier</option>\n\
                    <option value="NAS-IP-Address">NAS-IP-Address</option>\n\
                    <option value="NAS-IPv6-Address">NAS-IPv6-Address</option>\n\
                    <option value="NAS-Identifier">NAS-Identifier</option>\n\
                    <option value="NAS-Port">NAS-Port</option>\n\
                    <option value="NAS-Port-Id">NAS-Port-Id</option>\n\
                    <option value="NAS-Port-Type">NAS-Port-Type</option>\n\
                    <option value="PKM-AUTH-Key">PKM-AUTH-Key</option>\n\
                    <option value="PKM-CA-Cert">PKM-CA-Cert</option>\n\
                    <option value="PKM-Config-Settings">PKM-Config-Settings</option>\n\
                    <option value="PKM-Cryptosuite-List">PKM-Cryptosuite-List</option>\n\
                    <option value="PKM-SA-Descriptor">PKM-SA-Descriptor</option>\n\
                    <option value="PKM-SAID">PKM-SAID</option>\n\
                    <option value="PKM-SS-Cert">PKM-SS-Cert</option>\n\
                    <option value="Password-Retry">Password-Retry</option>\n\
                    <option value="Port-Limit">Port-Limit</option>\n\
                    <option value="Proxy-State">Proxy-State</option>\n\
                    <option value="Reply-Message">Reply-Message</option>\n\
                    <option value="Route-IPv6-Information">Route-IPv6-Information</option>\n\
                    <option value="Service-Selection">Service-Selection</option>\n\
                    <option value="Service-Type">Service-Type</option>\n\
                    <option value="Session-Timeout">Session-Timeout</option>\n\
                    <option value="State">State</option>\n\
                    <option value="Stateful-IPv6-Address-Pool">Stateful-IPv6-Address-Pool</option>\n\
                    <option value="Termination-Action">Termination-Action</option>\n\
                    <option value="Tunnel-Assignment-ID">Tunnel-Assignment-ID</option>\n\
                    <option value="Tunnel-Client-Auth-ID">Tunnel-Client-Auth-ID</option>\n\
                    <option value="Tunnel-Client-Endpoint">Tunnel-Client-Endpoint</option>\n\
                    <option value="Tunnel-Link-Reject">Tunnel-Link-Reject</option>\n\
                    <option value="Tunnel-Link-Start">Tunnel-Link-Start</option>\n\
                    <option value="Tunnel-Link-Stop">Tunnel-Link-Stop</option>\n\
                    <option value="Tunnel-Medium-Type">Tunnel-Medium-Type</option>\n\
                    <option value="Tunnel-Password">Tunnel-Password</option>\n\
                    <option value="Tunnel-Preference">Tunnel-Preference</option>\n\
                    <option value="Tunnel-Private-Group-ID">Tunnel-Private-Group-ID</option>\n\
                    <option value="Tunnel-Reject">Tunnel-Reject</option>\n\
                    <option value="Tunnel-Server-Auth-ID">Tunnel-Server-Auth-ID</option>\n\
                    <option value="Tunnel-Server-Endpoint">Tunnel-Server-Endpoint</option>\n\
                    <option value="Tunnel-Start">Tunnel-Start</option>\n\
                    <option value="Tunnel-Stop">Tunnel-Stop</option>\n\
                    <option value="Tunnel-Type">Tunnel-Type</option>\n\
                    <option value="User-Name">User-Name</option>\n\
                    <option value="User-Password">User-Password</option>\n\
                    <option value="Vendor-Specific">Vendor-Specific</option>\n\
                </select>\n\
            </div>\n\
        </div>\n\
        <div class="large-6 medium-6 columns">\n\
            <div class="input select">\n\
                <label for="attribute">Attribute</label>\n\
                <input type="text" name="value[]" value=""/>\n\
                <a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a>\n\
            </div>\n\
        </div>\n\
    </div>\n\
</div>'; //New input field html
                    
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(e){ //Once add button is clicked
        e.preventDefault();
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent().parent().parent().parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>