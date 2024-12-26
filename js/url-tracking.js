const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

// if(urlParams.has('cstm_ppc_channel')){
//     const cstm_ppc_channel = urlParams.get('cstm_ppc_channel');
//     Set_Cookie('cstm_ppc_channel', cstm_ppc_channel, 30); //the number 30 = 30 days
// }
// if(urlParams.has('cstm_ppc_campaign')){
//     const cstm_ppc_campaign = urlParams.get('cstm_ppc_campaign');
//     Set_Cookie('cstm_ppc_campaign', cstm_ppc_campaign, 30);
// }
// if(urlParams.has('cstm_ppc_placement')){
//     const cstm_ppc_placement = urlParams.get('cstm_ppc_placement');
//     Set_Cookie('cstm_ppc_placement', cstm_ppc_placement, 30);
// }
// if(urlParams.has('cstm_ppc_device')){
//     const cstm_ppc_device = urlParams.get('cstm_ppc_device');
//     Set_Cookie('cstm_ppc_device', cstm_ppc_device, 30);
// }

// if(urlParams.has('cstm_ppc_medium')){
//     const cstm_ppc_medium = urlParams.get('cstm_ppc_medium');
//     Set_Cookie('cstm_ppc_medium', cstm_ppc_medium, 30);
// }


if(urlParams.has('utm_keywords__c')){
    const utm_keywords__c = urlParams.get('utm_keywords__c');
    Set_Cookie('utm_keywords__c', utm_keywords__c, 30);
}
if(urlParams.has('utm_channel')){
    const utm_channel = urlParams.get('utm_channel');
    Set_Cookie('utm_channel', utm_channel, 30);
}
if(urlParams.has('utm_GCLID__c')){
    const utm_GCLID__c = urlParams.get('utm_GCLID__c');
    Set_Cookie('utm_GCLID__c', utm_GCLID__c, 30);
}
if(urlParams.has('utm_term')){
    const utm_term = urlParams.get('utm_term');
    Set_Cookie('utm_term', utm_term, 30); //the number 30 = 30 days
}
if(urlParams.has('utm_placement')){
    const utm_placement = urlParams.get('utm_placement');
    Set_Cookie('utm_placement', utm_placement, 30);
}
if(urlParams.has('utm_device')){
    const utm_device = urlParams.get('utm_device');
    Set_Cookie('utm_device', utm_device, 30);
}
if(urlParams.has('utm_campaign')){
    const utm_campaign = urlParams.get('utm_campaign');
    Set_Cookie('utm_campaign', utm_campaign, 30);
}
if(urlParams.has('utm_source')){
    const utm_source = urlParams.get('utm_source');
    Set_Cookie('utm_source', utm_source, 30);
}
if(urlParams.has('utm_creative')){
    const utm_creative = urlParams.get('utm_creative');
    Set_Cookie('utm_creative', utm_creative, 30);
}






// if(urlParams.has('UTM_Source')){
//     const UTM_Source = urlParams.get('UTM_Source');
//     Set_Cookie('UTM_Source', UTM_Source, 30);
// }
// if(urlParams.has('UTM_Subsource')){
//     const UTM_Subsource = urlParams.get('UTM_Subsource');
//     Set_Cookie('UTM_Subsource', UTM_Subsource, 30);
// }
// if(urlParams.has('UTM_Medium')){
//     const UTM_Medium = urlParams.get('UTM_Medium');
//     Set_Cookie('UTM_Medium', UTM_Medium, 30);
// }
// if(urlParams.has('UTM_Campaign')){
//     const UTM_Campaign = urlParams.get('UTM_Campaign');
//     Set_Cookie('UTM_Campaign', UTM_Campaign, 30);
// }
// if(urlParams.has('UTM_Term')){
//     const UTM_Term = urlParams.get('UTM_Term');
//     Set_Cookie('UTM_Term', UTM_Term, 30);
// }
// if(urlParams.has('UTM_Ad_Group')){
//     const UTM_Ad_Group = urlParams.get('UTM_Ad_Group');
//     Set_Cookie('UTM_Ad_Group', UTM_Ad_Group, 30);
// }
// if(urlParams.has('UTM_Placement')){
//     const UTM_Placement = urlParams.get('UTM_Placement');
//     Set_Cookie('UTM_Placement', UTM_Placement, 30);
// }
// if(urlParams.has('UTM_Device')){
//     const UTM_Device = urlParams.get('UTM_Device');
//     Set_Cookie('UTM_Device', UTM_Device, 30);
// }
// if(urlParams.has('UTM_GCLID')){
//     const UTM_GCLID = urlParams.get('UTM_GCLID');
//     Set_Cookie('UTM_GCLID', UTM_GCLID, 30);
// }
// if(urlParams.has('UTM_Ad')){
//     const UTM_Ad = urlParams.get('UTM_Ad');
//     Set_Cookie('UTM_Ad', UTM_Ad, 30);
// }
// if(urlParams.has('UTM_Location')){
//     const UTM_Location = urlParams.get('UTM_Location');
//     Set_Cookie('UTM_Location', UTM_Location, 30);
// }
// if(urlParams.has('UTM_Channel')){
//     const UTM_Channel = urlParams.get('UTM_Channel');
//     Set_Cookie('UTM_Channel', UTM_Channel, 30);
// }
// if(urlParams.has('UTM_Content')){
//     const UTM_Content = urlParams.get('UTM_Content');
//     Set_Cookie('UTM_Content', UTM_Content, 30);
// }



