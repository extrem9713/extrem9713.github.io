	<footer class="footer container-fluid">
	<div class="row">
		<div class="col-lg-4" id="time">
			<h5>訂購專線</h5>
			<p>(02)8797-8993</p>
			<h5>服務時間</h5>
			<p>星期一至星期日 09:00~13:00、14:00~18:00</p>			
		</div>
		<div class="col-4 text-center" id="time-rwd"><i data-toggle="modal" data-target="#modal-time" class="fas fa-business-time" style="font-size:8vw;"></i></div>
		<div class="col-lg-4" id="location">
			<h5>店家資訊</h5>
			<p>新北門市：○○○○○○</p>
			<p>桃園門市：○○○○○○</p>
			<p>新竹門市：○○○○○○</p>
			<p>台中門市：○○○○○○</p>
			<p>高雄門市：○○○○○○</p>			
		</div>
		<div class="col-4 text-center" id="location-rwd"><i data-toggle="modal" data-target="#modal-location" class="fas fa-map-marker-alt" style="font-size:8vw;"></i></div>
		<div class="col-lg-4" id="question">
			<form>
			<textarea class="form-control" name="message" id="message" style="resize: none" cols="50" rows="7" placeholder="請在此輸入您的意見與想法...
之後將有專人寄信給您"></textarea>
			<div class="row justify-content-center">
			<div class="col-lg-8">
				<input type="email" class="form-control" placeholder="請在此輸入E-mail" id="messagemail" name="messagemail">
				</div>
				<button type="button" class="form-control btn btn-primary col-lg-2" id="message-submit">提交</button>
			</div>
			</form>
		</div>
		<div class="col-4 text-center" id="question-rwd"><i data-toggle="modal" data-target="#modal-question" class="fas fa-envelope" style="font-size:8vw;"></i></div>		
    </div>
	<div class="text-center">
		<p id="copyright">Copyright &copy; 2019~ Fatty胖胖烘培坊 All Rights Reserved</p>
	</div>


	<div class="modal fade" id="modal-time"  role="dialog">
	<div class="modal-dialog" role="document">
    <div class="modal-content" v-bind:style="modalcontentstyle">
      <div class="modal-header">		         
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span v-bind:style="closestyle" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" v-bind:style="modalbodystyle">
		 <p v-bind:style="titlestyle">{{timetitle}}</p>
		 <p v-bind:style="textstyle">{{weekday}}</p>
		 <p v-bind:style="textstyle">{{time}}</p>
		 <p v-bind:style="textstyle">{{phone}}<a href="tel:0911061378" ><i v-bind:class="phoneicon"v-bind:style="phonestyle"></i></a></p>
		 
		 
      </div>
      <div class="modal-footer">  
  
      </div>
    </div>
  </div>
	</div>

	<div class="modal fade" id="modal-location"  role="dialog">
	<div class="modal-dialog" role="document">
    <div class="modal-content" v-bind:style="modalcontentstyle">
      <div class="modal-header">		         
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span v-bind:style="closestyle" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" v-bind:style="modalbodystyle">
		 <p v-bind:style="titlestyle">{{locationtitle}}</p>
		 <p v-for="location in locations" v-bind:style="textstyle">{{location.locate}}</p>
		 
		 
      </div>
      <div class="modal-footer">  
  
      </div>
    </div>
  </div>
	</div>



	<div class="modal fade" id="modal-question"  role="dialog">
	<div class="modal-dialog" role="document">
    <div class="modal-content" v-bind:style="modalcontentstyle">
      <div class="modal-header">		         
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span v-bind:style="closestyle" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" v-bind:style="modalbodystyle">
		 <label for="questioncontent" v-bind:style="titlestyle">{{questiontitle}}</label>
		 <textarea id="questioncontent" v-bind:class="formclass" v-bind:style="questionstyle" v-model.trim="questioncontent" cols="50" rows="7" placeholder="請在此輸入您的意見與想法..."></textarea>
		 <input type="email"  v-bind:class="formclass" v-bind:style="emailstyle" placeholder="請在此輸入E-mail" id="emailname" v-model="emailname">
		 <input type="button" v-bind:style="btnstyle" v-bind:class="buttonclass" v-on:click="questionsubmit" value="提交">
		 
      </div>
      <div class="modal-footer">  
  
      </div>
    </div>
  </div>
	</div>

	</footer>
	<script>
		new Vue({
			el:"#modal-time",
			data:{
				timetitle:"服務時間",
				weekday:"星期一至星期日",
				time:"09:00~21:30",
				phone:"連絡電話",
				phoneicon:"fas fa-phone",				
				closestyle:"color:black;font-size:6vw",
				modalcontentstyle:"background:#b5d1e8;border-radius:10px;left:15%;margin-top:20vh;width:70vw;height:60vh;",
				modalbodystyle:"background:#c4e1ff;margin-left:2vw;margin-right:2vw;",
				titlestyle:"font-size:10vw;color:black;text-align:center;font-family:'ngaan';",
				textstyle:"font-size:8vw;color:black;text-align:center;font-family:'ngaan';",
				phonestyle:"color:black;font-size:8vw;",
			}
		})

		new Vue({
			el:"#modal-location",
			data:{
				locationtitle:"店家資訊",
				closestyle:"color:black;font-size:6vw",
				locations:[
					{locate:"新北門市：○○○○○○"},
					{locate:"桃園門市：○○○○○○"},
					{locate:"新竹門市：○○○○○○"},
					{locate:"台中門市：○○○○○○"},
					{locate:"高雄門市：○○○○○○"},
				],
				modalcontentstyle:"background:#b5d1e8;border-radius:10px;margin-top:10vh;width:70vw;height:90vh;left:15%;position:absulte;",
				modalbodystyle:"background:#c4e1ff;margin-left:2vw;margin-right:2vw;",
				titlestyle:"font-size:10vw;color:black;text-align:center;font-family:'ngaan';",
				textstyle:"font-size:8vw;color:black;text-align:center;font-family:'ngaan';",
			}
		})
		

		new Vue({
			el:"#modal-question",
			data:{
				questiontitle:"意見回饋",
				questioncontent:"",				
				emailname:"",
				questionstyle:"resize:none;font-size:5vw;",
				emailstyle:"font-size:4vw;",
				btnstyle:"font-size:4vw;margin-top:1vh;",
				titlestyle:"font-size:10vw;color:black;text-align:center;font-family:'ngaan';",
				modalcontentstyle:"background:#b5d1e8;border-radius:10px;margin-top:10vh;width:70vw;height:60vh;left:15%;position:absulte;",
				modalbodystyle:"background:#c4e1ff;margin-left:2vw;margin-right:2vw;",
				closestyle:"color:black;font-size:5vw",
				formclass:"form-control",
				buttonclass:"form-control btn btn-primary",
			},
			methods: {
				questionsubmit:function(){
					console.log(this.emailname);
					console.log(this.questioncontent);
					axios.post('message01.php',{messagemail:this.emailname,message:this.questioncontent})
					.then(res => {
						console.log(res)
					})
					.catch(err => {
						console.error(err); 
					})
				}
		
			},
		})
		
	</script>
	
