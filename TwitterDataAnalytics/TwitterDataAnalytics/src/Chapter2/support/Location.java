/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package Chapter2.support;

/**
 *
 * @author shamanth
 */
public class Location
{
    public Double latitude;
    public Double longitude;

    public Location(Double lat,Double lng)
    {
        latitude = lat;
        longitude  = lng;
    }

    public Location(double double1, double double2) {
		// TODO Auto-generated constructor stub
	}

	@Override
    public String toString()
    {
        return "Latitude: "+latitude+" & Longitude: "+longitude;
    }
}
