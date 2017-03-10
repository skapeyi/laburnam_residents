@extends('layouts.main')

@section('content')
<div class="container">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-body">
        <div class="tab-content">
          <!-- Categroy 1 -->
          <div class=" tab-pane active" id="category-1" role="tabpanel">
            <div class="panel-group panel-group-simple panel-group-continuous" id="accordion2"
            aria-multiselectable="true" role="tablist">
            <!-- Question 1 -->
            <div class="panel">
              <div class="panel-heading" id="question-1" role="tab">
                <a class="panel-title" aria-controls="answer-1" aria-expanded="true" data-toggle="collapse"
                href="#answer-1" data-parent="#accordion2">
                <h3>Message from the manager</h3>
              </a>
            </div>
            <div class="panel-collapse collapse in" id="answer-1" aria-labelledby="question-1"
            role="tabpanel">
            <div class="panel-body"> <i>
              Welcome to Laburnam Courts Uganda. We are delighted to have you at our Luxurious Serviced Apartments.
              If at any time, we fall short of this ideal or if you have any suggestions or ideas on how we can best serve you, please ask for the affected department head through our 24hour Reception on extension number 123 who shall always be available to speak to you.
              Laburnam Courts is continuously undergoing improvements as to always deliver the best service for each and every guest or tenant.
              The entire Management team is listed below at your disposal at any time during your stay.

            </div>
          </div>
        </div>
        <!-- End Question 1 -->

        <!-- Question 2 -->
        <div class="panel">
          <div class="panel-heading" id="question-2" role="tab">
            <a class="panel-title" aria-controls="answer-2" aria-expanded="false" data-toggle="collapse"
            href="#answer-2" data-parent="#accordion2">
            <h3>What facilities do I have access to?</h3>
          </a>
        </div>
        <div class="panel-collapse collapse" id="answer-2" aria-labelledby="question-2"
        role="tabpanel">
        <div class="panel-body">
          As a resident, you are entitled to the following facilities
          <ul>
            <li>24 Hour Wifi Internet Connectivity.</li>
            <li>Conference Hall for private meetings.</li>
            <li>Swimming pool</li>
            <li>Health club with a modern Gym, Sauna, Steam bath and Jacuzzi</li>
            <li>Squash and Badminton Courts</li>
            <li>Beauty Palour/Spa complete with a hair salon, massage room and Hammam room. </li>
            <li>Children play ground</li>
            <li>Maid and Laundry Services</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Question 2 -->

    <!-- Question 3 -->
    <div class="panel">
      <div class="panel-heading" id="question-3" role="tab">
        <a class="panel-title" aria-controls="answer-3" aria-expanded="false" data-toggle="collapse"
        href="#answer-3" data-parent="#accordion2">
        <h3>Community shared facilities</h3>
      </a>
    </div>

    <div class="panel-collapse collapse" id="answer-3" aria-labelledby="question-3"
    role="tabpanel">
    <div class="panel-body">
      <table class="table">
        <caption>Optional table caption.</caption>
        <thead>
          <tr>
            <th>Facility</th>
            <th>Time</th>
            <th>Extension Number</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Swimming pool</td>
            <td>Open 24 Hours</td>
            <td>123</td>
          </tr>
          <tr>
            <td>Health Club</td>
            <td>4:30am- 9:30pm</td>
            <td>126</td>
          </tr>
          <tr>
            <td>Restaurant</td>
            <td>7:00am -9:30pm</td>
            <td>135</td>
            </tr
            <tr>
              <td>Squash and Badminton Court</td>
              <td>Open 24 Hours</td>
              <td>126</td>
            </tr>
            <tr>
              <td>Conference Hall</td>
              <td>8:00am-8:00pm	</td>
              <td>135</td>
            </tr>
          </tbody>
        </table>

        <p>Please explore our property as there are many services that we offer. There is a fully equipped gym that has a myriad of benefits such as a full time instructor to help you. <p>In the gym, there is also a state of the art changing room which has a heated Jacuzzi, a steam room and heated sauna. There is also a studio room for aerobic exercises, two squash courts and a badminton court.
          There is a heated pool that is open to all to luxuriate over. <p>The fine dining restaurant was developed with all cuisines in mind. Do not hesitate to ask for special requests if your ideal meal is not on the menu.
            Lastly to unwind, we have the wellness center which offers a variety of massage styles, a facial machine, a weight loss bipolar cavitation machine and a fully stocked salon.
            <p>This is just a few of what you shall find here and we urge you to explore your new surroundings.
              Check out is at 12pm and Check in is at 12pm respectively. Should you require a late check out, please contact the reservation supervisor on extension 123 on the day before your expected departure.
              The facility reserves the right of admission.

            </div>
          </div>
        </div>
        <!-- End Question 3 -->

        <!-- Question 4 -->
        <div class="panel">
          <div class="panel-heading" id="question-4" role="tab">
            <a class="panel-title" aria-controls="answer-4" aria-expanded="false" data-toggle="collapse"
            href="#answer-4" data-parent="#accordion2">
            <h3>Service Center</h3>
          </a>
        </div>
        <div class="panel-collapse collapse" id="answer-4" aria-labelledby="question-4"
        role="tabpanel">
        <div class="panel-body"><i>
          <table class="table">
            <caption>Service centers and extension numbers.</caption>
            <thead>
              <tr>
                <th>Name</th>
                <th>Designation/Department</th>
                <th>Extension Number</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mohamud Ahmbed</td>
                <td>General manager</td>
                <td>+256 776 766666</td>
              </tr>
              <tr>
                <td>Grace Awuro</td>
                <td>Executive House Keeper</td>
                <td>123</td>
              </tr>
              <tr>
                <td>Richard Mugire</td>
                <td>Maintenance Manaager</td>
                <td>123</td>
              </tr>
              <tr>
                <td>Eshare Chen</td>
                <td>General Inquiries</td>
                <td>129</td>
              </tr>
              <tr>
                <td>Catharine Nabirye</td>
                <td>Legal Adviser	</td>
                <td>266</td>
              </tr>
              <tr>
                <td>Nancy Njery</td>
                <td>Accounts</td>
                <td>122</td>
              </tr>
              <tr>
                <td>Navin Tomar</td>
                <td>Head Chef</td>
                <td>135</td>
              </tr>
              <tr>
                <td>Joyce Muthoni</td>
                <td>Reservation Supervisor</td>
                <td>123</td>
              </tr>
              <tr>
                <td>Fred Nabiswa</td>
                <td>In-house electrician	</td>
                <td>123</td>
              </tr>
              <tr>
                <td>Richard Dison</td>
                <td>In-house plumber</td>
                <td>123</td>
              </tr>
              <tr>
                <td>Fatuma Abdul</td>
                <td>Wellness center director	</td>
                <td>270</td>
              </tr>
              <tr>
                <td>James Kayongo</td>
                <td>Gym Instructor	</td>
                <td>126</td>
              </tr>
            </tbody>
          </table>
        </i></div>
      </div>
    </div>

    <!-- End Question 4 -->





  </div>

  <!-- End Categroy 1 -->



  @endsection
