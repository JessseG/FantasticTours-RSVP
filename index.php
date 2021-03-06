<!DOCTYPE html>
<html>
  <head>
    <title>Contact Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>

  <body>
    <div class="contact-title">
      <h1>Fantastic Tours</h1>
      <h2>Reservations</h2>
    </div>

    <div class="contact-form">
      <form
        id="contact-form"
        method="POST"
        action="database/sendRsvp.php"
      >
        <input
          name="name"
          type="text"
          id="name"
          class="form-control"
          placeholder="Full Name"
          required
        />
        <br />
        <div class="wrap">
          <select name="hotel" id="hotels" class="form-control" required>
            <option value="">Select Hotel</option>
            <option value="BestWestDoral">Best Western Doral</option>
            <option value="Trump">Trump Hotel</option>
            <option value="Quality79">Quality Inn Doral</option>
            <option value="HomewoodDolphin">Homewood Dolphin</option>
            <option value="Embassy">Embassy</option>
          </select>

          <br />
          <select name="tour" id="tours" class="form-control" required>
            <option value="">Select Tour</option>
            <option value="BigBus">Big Bus</option>
            <option value="Everlades">Everglades</option>
            <option value="KeyWest">Key West </option>
            <option value="Boat">Boat Tour </option>
            <option value="BusBoatCombo">Bus & Boat Combo </option>
          </select>

          <br />
          <input
            type="date"
            class="form-control"
            name="date"
            id="dates"
            placeholder="Select Date"
            required
            aria
            required="true"
          />

          <input
            type="time"
            class="form-control"
            name="time"
            id="times"
            step="300"
            placeholder="Time"
            required
            aria
            required
          />

          <br />

          <input
            name="adults"
            id="adults"
            type="number"
            class="form-control"
            size=""
            placeholder="Adults"
            min="1"
            required
          />

          <input
            name="kids"
            type="number"
            id="kids"
            class="form-control"
            placeholder="Kids"
            min="0"
            default="0"
          />
        </div>

        <input
          name="reservedBy"
          type="text"
          id="reserved"
          class="form-control"
          placeholder="Reserved by"
          required
        />
        <input
          name="room"
          type="number"
          id="room"
          class="form-control"
          placeholder="Room #"
          min="0"
          required
        />

        <br />
        <textarea
          name="details"
          id="details"
          class="form-control"
          placeholder="Details (optional)"
          rows="4"
        ></textarea>

        <br />

        <input type="submit" class="form-control submit" value="Confirm" />
      </form>
    </div>
  </body>
</html>
