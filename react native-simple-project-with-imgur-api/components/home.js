import React from "react";
import axios from "axios";
import {
  StyleSheet,
  Text,
  View,
  SafeAreaView,
  Image,
  TouchableOpacity,
  Button,
  Alert,
  Platform,
  StatusBar,
} from "react-native";
import { NavigationContainer } from "@react-navigation/native";
import { createNativeStackNavigator } from "@react-navigation/native-stack";
// ALNqDKXbHmAPrSklSlN4tg
// ig0gFbh_xAJd7hY2NtQMpjUUkMgZbQ
//client-id  a9a255327f57be5
// secret-   0f004505c4b419d28e8f9f6f42281396179279f9
function Home({ navigation }) {
  return (
    <View style={{ flex: 1, alignItems: "center", justifyContent: "center" }}>
      <Text>Home Screen</Text>
      <Button
        title='Go to Details'
        onPress={() => navigation.navigate("Details")}
      />
      <SafeAreaView style={styles.container}>
        <Text onPress={() => console.log("clicked")} style={styles.myText}>
          Hello World
        </Text>
        <TouchableOpacity onPress={() => console.log("image")}>
          <Image
            source={{
              height: 300,
              width: 200,
              uri: "https://picsum.photos/200/300",
            }}
          />
        </TouchableOpacity>
        <Button
          title='click here'
          onPress={() =>
            Alert.alert("title", "message", [
              { text: "yes", onPress: () => console.log("yes") },
              { text: "no", onPress: () => console.log("no") },
            ])
          }
        />
        <Button title='profiler' onPress={fetchAll} />
        <Button
          title='Go to Profile'
          onPress={() => navigation.navigate("Profile")}
        />
        <StatusBar style='auto' />
      </SafeAreaView>
    </View>
  );
}
// export default class Home extends React.Component {
//   render() {
//     return (
//       <SafeAreaView style={styles.container}>
//         <Text onPress={() => console.log("clicked")} style={styles.myText}>
//           Hello World
//         </Text>
//         <TouchableOpacity onPress={() => console.log("image")}>
//           <Image
//             source={{
//               height: 300,
//               width: 200,
//               uri: "https://picsum.photos/200/300",
//             }}
//           />
//         </TouchableOpacity>
//         <Button
//           title='click here'
//           onPress={() =>
//             Alert.alert("title", "message", [
//               { text: "yes", onPress: () => console.log("yes") },
//               { text: "no", onPress: () => console.log("no") },
//             ])
//           }
//         />
//         <Button title='profiler' onPress={fetchAll} />
//         <Button
//           title='Go to Profile'
//           onPress={() => navigation.navigate("Profile")}
//         />
//         <StatusBar style='auto' />
//       </SafeAreaView>
//     );
//   }
//}
const fetchAll = async () => {
  const configurationObject = {
    method: "get",
    url: "https://api.imgur.com/3/gallery/hot/viral/day/1?showViral=true&mature=true&album_previews=true",
    headers: {
      Authorization: "Client-ID a9a255327f57be5",
    },
  };
  const response = await axios(configurationObject);
  console.log(response.data);
};
const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "dodgerblue",
    fontSize: "40px",
    paddingTop: Platform.OS === "android" ? StatusBar.currentHeight : 0,
  },
  myText: {
    fontSize: 40,
    fontWeight: "bold",
  },
});
