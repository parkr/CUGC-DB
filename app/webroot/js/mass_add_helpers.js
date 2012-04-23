var CUGCDB = CUGCDB || {};
CUGCDB.indices = {
	"emails": 0,
	"phone_numbers": 0,
	"graduation_years": 0,
	"mailing_addresses": 0,
	"occupations": 0,
	"officer_positions": 0
};
CUGCDB.removeInput = function(){
	// Removes just one input field
	console.log("removed", this.parentNode.parentNode.removeChild(this.parentNode));
	return false;
}
CUGCDB.removeAllFieldsInSection = function(){
	// Removes the entire .sub_field_bunch
	console.log("removed", this.parentNode.parentNode.removeChild(this.parentNode));
	return false;
}

document.onreadystatechange = function(){
	if(document.readyState == "complete"){
		
		// Attach handlers: #add_phone_number, #add_email, #add_graduation_year, #add_mailing_address, #add_occupation, #add_officer_position
		
		document.getElementById("add_phone_number").onclick = function(){
			
			// Add extra inputs for this field
			// Add extra inputs for this field
			var index = ++CUGCDB.indices.occupations;
			
			var container, label, input, fields = [
				{
					"fieldName": "phone_number",
					"camel_cased": "PhoneNumber",
					"human": "Phone Number"
				}
			];
			
			for(var i=0; i<fields.length; i++){
				container = document.createElement("div");
				container.className = "input text required";
				
				label = document.createElement("label");
				label['for'] = "PhoneNumber"+index+fields[i].camel_cased;
				label.innerHTML = fields[i].human+" #"+(index+1);
				container.appendChild(label);
			
				input = document.createElement("input");
				input.name = "data[PhoneNumber]["+index+"]["+fields[i].fieldName+"]";
				input.maxlength = 255;
				input.type = "text";
				input.id = "PhoneNumber"+index+fields[i].camel_cased;
				container.appendChild(input);
			
				document.getElementById("phone_numbers").insertBefore(container, this);
			}
			
			return false;
		}
		
		document.getElementById("add_email").onclick = function(){
			
			// Add extra inputs for this field
			CUGCDB.indices.emails++;
			
			var container = document.createElement("div");
			container.className = "input text required";
			
			var label = document.createElement("label");
			label['for'] = "Email"+CUGCDB.indices.emails+"Email";
			label.innerHTML = "Email #"+(CUGCDB.indices.emails+1);
			container.appendChild(label);
			
			var input = document.createElement("input");
			input.name = "data[Email]["+CUGCDB.indices.emails+"][email]";
			input.maxlength = 255;
			input.type = "text";
			input.id = "Email"+CUGCDB.indices.emails+"Email";
			container.appendChild(input);
			
			document.getElementById("emails").insertBefore(container, this);
			
			return false;
		}
		
		document.getElementById("add_graduation_year").onclick = function(){
			
			// Add extra inputs for this field
			var index = ++CUGCDB.indices.graduation_years;
			
			var container, label, input, fields = [
				{
					"fieldName": "degree",
					"camel_cased": "Degree",
					"human": "Degree"
				},
				{
					"fieldName": "year",
					"camel_cased": "Year",
					"human": "Year"
				}
			];
			
			for(var i=0; i<fields.length; i++){
				container = document.createElement("div");
				container.className = "input text required";
				
				label = document.createElement("label");
				label['for'] = "GraduationYear"+index+fields[i].camel_cased;
				label.innerHTML = fields[i].human+" #"+(index+1);
				container.appendChild(label);
			
				input = document.createElement("input");
				input.name = "data[GraduationYear]["+index+"]["+fields[i].fieldName+"]";
				input.maxlength = 255;
				input.type = "text";
				input.id = "GraduationYear"+index+fields[i].camel_cased;
				container.appendChild(input);
			
				document.getElementById("graduation_years").insertBefore(container, this);
			}
			
			return false;
		}
		
		document.getElementById("add_officer_position").onclick = function(){
			
			// Add extra inputs for this field
			var index = ++CUGCDB.indices.officer_positions;
			
			var container, label, input, fields = [
				{
					"fieldName": "position",
					"camel_cased": "Position",
					"human": "Position"
				},
				{
					"fieldName": "years",
					"camel_cased": "Years",
					"human": "Years"
				}
			];
			
			for(var i=0; i<fields.length; i++){
				container = document.createElement("div");
				container.className = "input text required";
				
				label = document.createElement("label");
				label['for'] = "OfficerPosition"+index+fields[i].camel_cased;
				label.innerHTML = fields[i].human+" #"+(index+1);
				container.appendChild(label);
			
				input = document.createElement("input");
				input.name = "data[OfficerPosition]["+index+"]["+fields[i].fieldName+"]";
				input.maxlength = 255;
				input.type = "text";
				input.id = "OfficerPosition"+index+fields[i].camel_cased;
				container.appendChild(input);
			
				document.getElementById("officer_positions").insertBefore(container, this);
			}
			
			return false;
		}
		
		document.getElementById("add_mailing_address").onclick = function(){
			
			// Add extra inputs for this field
			var index = ++CUGCDB.indices.mailing_addresses;
			
			var container, label, input, fields = [
				{
					"fieldName": "street",
					"camel_cased": "Street",
					"human": "Street"
				},
				{
					"fieldName": "city",
					"camel_cased": "City",
					"human": "City"
				},
				{
					"fieldName": "state",
					"camel_cased": "State",
					"human": "State"
				},
				{
					"fieldName": "zip_code",
					"camel_cased": "ZipCode",
					"human": "Zip Code"
				},
				{
					"fieldName": "greater_city",
					"camel_cased": "GreaterCity",
					"human": "Greater City"
				}
			];
			
			for(var i=0; i<fields.length; i++){
				container = document.createElement("div");
				container.className = "input text required";
				
				label = document.createElement("label");
				label['for'] = "MailingAddress"+index+fields[i].camel_cased;
				label.innerHTML = fields[i].human+" #"+(index+1);
				container.appendChild(label);
			
				input = document.createElement("input");
				input.name = "data[MailingAddress]["+index+"]["+fields[i].fieldName+"]";
				input.maxlength = 255;
				input.type = "text";
				input.id = "MailingAddress"+index+fields[i].camel_cased;
				container.appendChild(input);
			
				document.getElementById("mailing_addresses").insertBefore(container, this);
			}
					
			return false;
		}
		
		document.getElementById("add_occupation").onclick = function(){
			
			// Add extra inputs for this field
			var index = ++CUGCDB.indices.occupations;
			
			var container, label, input, fields = [
				{
					"fieldName": "position",
					"camel_cased": "Position",
					"human": "Position"
				},
				{
					"fieldName": "company",
					"camel_cased": "Company",
					"human": "Company"
				}
			];
			
			for(var i=0; i<fields.length; i++){
				container = document.createElement("div");
				container.className = "input text required";
				
				label = document.createElement("label");
				label['for'] = "Occupation"+index+fields[i].camel_cased;
				label.innerHTML = fields[i].human+" #"+(index+1);
				container.appendChild(label);
			
				input = document.createElement("input");
				input.name = "data[Occupation]["+index+"]["+fields[i].fieldName+"]";
				input.maxlength = 255;
				input.type = "text";
				input.id = "Occupation"+index+fields[i].camel_cased;
				container.appendChild(input);
			
				document.getElementById("occupations").insertBefore(container, this);
			}
			
			return false;
		}
		
		/*CUGCDB.removeAliases = [
			{
				"removeAlias": "remove_emails",
				"removeDiv": "emails"
			},
			{
				"removeAlias": "remove_phone_numbers",
				"removeDiv": "phone_numbers"
			},
			{
				"removeAlias": "remove_graduation_years",
				"removeDiv": "graduation_years"
			},
			{
				"removeAlias": "remove_mailing_addresses",
				"removeDiv": "mailing_addresses"
			},
			{
				"removeAlias": "remove_occupations",
				"removeDiv": "occupations"
			},
			{
				"removeAlias": "remove_officer_positions",
				"removeDiv": "officer_positions"
			}
		];
		
		for(var a=0; a<CUGCDB.removeAliases.length; a++){
			
			document.getElementById(CUGCDB.removeAliases[a].removeAlias).onclick = function(){
				var div = document.getElementById(CUGCDB.removeAliases[a].removeDiv);
				div.parentNode.removeChild(div);
				return false;
			};
			
		}*/
		
		/*var inputs = document.getElementsByTagName("input");
		for(var r=0; r<inputs.length; r++){
			
			var _this = inputs[r];
			if(_this.id.indexOf("Member") < 0 && _this.type.search(/(submit|hidden)/) < 0){
				console.log("Adding handler to :", _this);
				
				// Red 'x'
				var removeButton = document.createElement("a");
				removeButton.className = "removeButton";
				removeButton.innerHTML = "x";
				removeButton.title = "remove this field";
				removeButton.onclick = CUGCDB.removeInput;
				removeButton.dataset.id_to_remove = _this.id;
				
				_this.parentNode.appendChild(removeButton);
				
			}
		}*/
		
		var sub_field_bunches = document.getElementsByClassName("sub_field_bunch");
		for(var s=0; s<sub_field_bunches.length; s++){
			
			var _this = sub_field_bunches[s];
			
			// 'Remove Fields' Link
			var removeButton = document.createElement("a");
			removeButton.className = "add_field";
			removeButton.innerHTML = "Remove Fields Above";
			removeButton.href = "#";
			removeButton.onclick = CUGCDB.removeAllFieldsInSection;
				
			_this.appendChild(removeButton);
			
			
		}
		
	}
};